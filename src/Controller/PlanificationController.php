<?php

namespace App\Controller;

use App\Entity\Planification;
use App\Form\PlanificationType;
use App\Repository\PlanificationRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Knp\Component\Pager\PaginatorInterface;


#[Route('/planification')]
class PlanificationController extends AbstractController
{
    #[Route('/', name: 'app_planification_index', methods: ['GET'])]
    public function index(PlanificationRepository $planificationRepository, Request $request): Response
    { 
        // Pagination
    $page = $request->query->getInt('page', 1);
    $pageSize = 4; // Number of items per page
    $totalPlanificationsCount = count($planificationRepository->findAll());
    $totalPages = ceil($totalPlanificationsCount / $pageSize);

    // Fetch the stocks for the current page
    $offset = ($page - 1) * $pageSize;

    // Handle search query
    $searchQuery = $request->query->get('search');
    $sortField = $request->query->get('sortField', 'date');
    $sortOrder = $request->query->get('sortOrder', 'asc');

        //add statistics
        $PlanificationStatistics = $planificationRepository->getplanStatistics();

        $labels = [];
        $data = [];

        foreach ($PlanificationStatistics as $statistic) {
            $labels[] = $statistic['location'];
            $data[] = $statistic['count'];
        }

    if ($searchQuery) {
        $planifications = $planificationRepository->findBySearch($searchQuery);
        $totalPlanificationsCount = count($planifications);
        $totalPages = ceil($totalPlanificationsCount / $pageSize);
    } else {
        $planifications = $planificationRepository->findAllWithSorting($sortField, $sortOrder, $pageSize, $offset);
    }

    $sortOptions = [
        'date' => 'Date',
        'location' => 'location',
    ];
    return $this->render('planification/index.html.twig', [
        'planifications' => $planifications,
        'page' => $page,
        'total_pages' => $totalPages,
        'sortOptions' => $sortOptions,
        'currentSortField' => $sortField,
        'currentSortOrder' => $sortOrder,
        'labels' => json_encode($labels),
            'data' => json_encode($data),
    ]);
    }

    #[Route('/new', name: 'app_planification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $planification = new Planification();
        $planification->setDate(new DateTimeImmutable());
        $form = $this->createForm(PlanificationType::class, $planification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $planification->setLocation($planification->getMission()->getLocation());
            $entityManager->persist($planification);
            $entityManager->flush();

            return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planification/new.html.twig', [
            'planification' => $planification,
            'form' => $form,
        ]);
    }

   

    #[Route('/{id_plan}/edit', name: 'app_planification_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Planification $planification, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlanificationType::class, $planification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('planification/edit.html.twig', [
            'planification' => $planification,
            'form' => $form,
        ]);
    }
    #[Route('/generate-pdf-Plan', name: 'pdf_plan')]
    public function planificationgeneratePdf(): Response
    {
        // Get the EntityManager
        $entityManager = $this->getDoctrine()->getManager();

        // Fetch data from the Waste table
        $planificationRepository = $entityManager->getRepository(Planification::class);
        $planifications = $planificationRepository->findAll();

        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load HTML content from a Twig template
        $html = $this->renderView('planification/pdf.html.twig', [
            'planifications' => $planifications,
        ]);

        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Generate the PDF response
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }
    #[Route('/{id_plan}', name: 'app_planification_delete')]
    public function delete( PlanificationRepository $repo,$id_plan, ManagerRegistry $mr): Response
    {
        $planification = $repo->find($id_plan);
        if ($planification === null) {
            // Handle the error, e.g., return a 404 response or throw an exception
        } else {
            $em = $mr->getManager();
            $em->remove($planification);
            $em->flush();
        }

        return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
    }

    
    



}