<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Entity\Reponse;
use App\Form\ComplaintType;
use App\Form\ReponseType;
use App\Repository\ComplaintRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/complaint')]
class ComplaintController extends AbstractController
{
    #[Route('/', name: 'app_complaint_index', methods: ['GET'])]
 public function index(ComplaintRepository $complaintRepository, Request $request, PaginatorInterface $paginator): Response
{
    $data = $complaintRepository->findAll();
        $complaints=$paginator->paginate(
        $data,
        $request->query->getInt('page', 1),
        10
    );

    return $this->render('complaint/index.html.twig', [
        'complaints' => $complaints,
    ]);
}

    

    #[Route('/new', name: 'app_complaint_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $complaint = new Complaint();
        $form = $this->createForm(ComplaintType::class, $complaint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($complaint);
            $entityManager->flush();

            return $this->redirectToRoute('app_complaint_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('complaint/new.html.twig', [
            'complaint' => $complaint,
            'form' => $form,
        ]);
    }

    #[Route('/user/{id}', name: 'app_complaint_show')]
public function show(Complaint $complaint, Request $request, EntityManagerInterface $entityManager): Response
{
    // Check if a response already exists
    $reponse = $complaint->getReponse();
    if (!$reponse) {
        // If no response exists, create a new one
        $reponse = new Reponse();
    }

    $form = $this->createForm(ReponseType::class, $reponse);

    // Handle the form submission...
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Set the complaint on the response and save it
        $reponse->setComplaint($complaint);
        $entityManager->persist($reponse);
        $entityManager->flush();

        return $this->redirectToRoute('app_complaint_show', ['id' => $complaint->getId()]);
    }

    return $this->render('complaint/show.html.twig', [
        'complaint' => $complaint,
        'complaintId' => $complaint->getId(), // Pass the complaintId to the template
        'form' => $form->createView(),
    ]);
}

#[Route('/usercomplaint/{id}', name: 'user_complaint_show')]
public function showUserComplaint(Complaint $complaint, Request $request, EntityManagerInterface $entityManager): Response
{
    // Check if a response already exists
    $reponse = $complaint->getReponse();
    if (!$reponse) {
        // If no response exists, create a new one
        $reponse = new Reponse();
    }

    $form = $this->createForm(ReponseType::class, $reponse);

    // Handle the form submission...
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Set the complaint on the response and save it
        $reponse->setComplaint($complaint);
        $entityManager->persist($reponse);
        $entityManager->flush();

        return $this->redirectToRoute('user_complaint_show', ['id' => $complaint->getId()]);
    }

    return $this->render('complaint/showusercomplaint.html.twig', [
        'complaint' => $complaint,
        'complaintId' => $complaint->getId(), // Pass the complaintId to the template
        'form' => $form->createView(),
    ]);
}

    #[Route('/{id}/edit', name: 'app_complaint_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Complaint $complaint, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ComplaintType::class, $complaint);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_complaint_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('complaint/edit.html.twig', [
            'complaint' => $complaint,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_complaint_delete', methods: ['POST'])]
    public function delete(Request $request, Complaint $complaint, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$complaint->getId(), $request->request->get('_token'))) {
            // Get the associated response
            $reponse = $complaint->getReponse();
    
            // Remove the response
            if ($reponse) {
                $entityManager->remove($reponse);
                $entityManager->flush();
            }
    
            // Now, remove the complaint
            $entityManager->remove($complaint);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('app_complaint_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    #[Route('/complaint/admin', name: 'admin', methods: ['GET'])]
    public function list(ComplaintRepository $complaintRepository): Response
    {
        return $this->render('complaint/index.html.twig', [
            'complaints' => $complaintRepository->findAll(),
        ]);
    }
    #[Route('/usercomplaint/{userId}', name: 'complaints_by_user', methods: ['GET'])]
    public function user_index(ComplaintRepository $complaintRepository, $userId): Response
    {
        $complaints = $complaintRepository->findBy(['user_id' => $userId]);
    
        return $this->render('complaint/userindex.html.twig', [
            'complaints' => $complaints,
        ]);
    }
    #[Route('/userreponse/{userId}', name: 'reponses_by_user', methods: ['GET'])]
    public function reponsesByUser(ComplaintRepository $complaintRepository, ReponseRepository $reponseRepository, $userId): Response
    {
        // Get complaints associated with the user
        $complaints = $complaintRepository->findBy(['user_id' => $userId]);

        // Extract response IDs associated with these complaints
        $complaintIds = array_map(function($complaint) {
            return $complaint->getId();
        }, $complaints);

        // Get responses associated with these complaints
        $reponses = $reponseRepository->findBy(['complaint' => $complaintIds]);

        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponses,
        ]);
    }
   
}
