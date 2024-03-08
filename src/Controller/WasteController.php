<?php

namespace App\Controller;

use App\Entity\Waste;
use App\Entity\Notification;

use App\Form\WasteType;

use App\Form\Waste2Type;

use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NotificationRepository;
use App\Repository\StockRepository;
use Doctrine\Migrations\Configuration\EntityManager\ManagerRegistryEntityManager;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/waste')]
class WasteController extends AbstractController
{
    #[Route('/', name: 'app_waste_index', methods: ['GET'])]
    public function index(WasteRepository $wasteRepository,PaginatorInterface $paginator,Request $request,NotificationRepository $notificationRepository): Response
    {
        $notificationsQuery = $notificationRepository->findAll();

        $wastes = $wasteRepository->findAll();
        $articles = $paginator->paginate(   
            $wastes, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            5 // Nombre de résultats par page
        );
        return $this->render('waste/index.html.twig', [
            'wastes' => $articles,
            'notifications' => $notificationsQuery,

        ]);
    }
    #[Route('/statistiques', name: 'app_waste_statistiques', methods: ['GET'])]
public function statistiques(ManagerRegistry $managerRegistry): Response
{
    $entityManager = $managerRegistry->getManager();

    $statistiques = $entityManager->getRepository(Waste::class)
        ->createQueryBuilder('w')
        ->select('w.location as wasteLocation, COUNT(w.id) as wasteCount')
        ->groupBy('w.location')
        ->getQuery()
        ->getResult();

    return $this->render('waste/stat.html.twig', [
        'statistiques' => $statistiques,
    ]);
}

    #[Route('/new', name: 'app_waste_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, NotificationRepository  $notificationRepository,StockRepository $stockRepository): Response
    {
        $waste = new Waste();
        $form = $this->createForm(WasteType::class, $waste);
        $form->handleRequest($request);
        $notificationsQuery = $notificationRepository->findAll();


        if ($form->isSubmitted() && $form->isValid()) {
            $id_stock = $form->get('stock')->getData();
            $qt = $form->get('quantite')->getData();
            $stockRepository=$stockRepository->find($id_stock);
            $stockRepository->setQuantitySt( $stockRepository->getQuantitySt() +$qt);
            $entityManager->persist($waste);
            $entityManager->flush();

            return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('waste/new.html.twig', [
            'waste' => $waste,
            'form' => $form,
            'notifications' => $notificationsQuery,

        ]);
    }

    #[Route('/{id}', name: 'app_waste_show', methods: ['GET'])]
    public function show(Waste $waste, NotificationRepository  $notificationRepository): Response
    {
        $notificationsQuery = $notificationRepository->findAll();

        return $this->render('waste/show.html.twig', [
            'waste' => $waste,
            'notifications' => $notificationsQuery,

        ]);
    }

    #[Route('/{id}/edit', name: 'app_waste_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Waste $waste, EntityManagerInterface $entityManager, NotificationRepository  $notificationRepository,StockRepository $stockRepository): Response
    {
        $form = $this->createForm(WasteType::class, $waste);
        $form->handleRequest($request);
        $notificationsQuery = $notificationRepository->findAll();
        
        if ($form->isSubmitted() && $form->isValid()) {
            $id_stock = $form->get('stock')->getData();
            $qt = $form->get('quantite')->getData();

            $stockRepository=$stockRepository->find($id_stock);
            $stockRepository->setQuantitySt( $stockRepository->getQuantitySt() +$qt);
             
            $entityManager->flush();

            return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('waste/edit.html.twig', [
            'waste' => $waste,
            'form' => $form,
            'notifications' => $notificationsQuery,

        ]);
    }

    #[Route('/{id}', name: 'app_waste_delete', methods: ['POST'])]
    public function delete(Request $request, Waste $waste, EntityManagerInterface $entityManager, NotificationRepository  $notificationRepository): Response
    {
        $notificationsQuery = $notificationRepository->findAll();

        if ($this->isCsrfTokenValid('delete'.$waste->getId(), $request->request->get('_token'))) {
            $entityManager->remove($waste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_waste_index', [
            'notifications' => $notificationsQuery,

        ], Response::HTTP_SEE_OTHER);
    }
    
    #[Route('/search', name: 'search')]
    public function search(Request $request, NotificationRepository  $notificationRepository): Response
    {
        $searchTerm = $request->query->get('searchTerm');
        $notificationsQuery = $notificationRepository->findAll();

        // Query the database to filter waste by type
        $entityManager = $this->getDoctrine()->getManager();
        $wasteRepository = $entityManager->getRepository(Waste::class);
        $filteredWastes = $wasteRepository->findBy(['type' => $searchTerm]);
    
        return $this->render('waste/search.html.twig', [
            'wastes' => $filteredWastes,
            'notifications' => $notificationsQuery,

        ]);
    }
    
    #[Route('/notification/{id}', name: 'app_notification_delete', methods: ['POST'])]
public function deleteNotification(Request $request, Notification $notification, EntityManagerInterface $entityManager, NotificationRepository  $notificationRepository): Response
{
    $notificationsQuery = $notificationRepository->findAll();

    if ($this->isCsrfTokenValid('delete'.$notification->getId(), $request->request->get('_token'))) {
        $entityManager->remove($notification);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_waste_index', [
        'notifications' => $notificationsQuery,

    ], Response::HTTP_SEE_OTHER);
}


}