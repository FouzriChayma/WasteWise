<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Waste;

use App\Entity\Notification;

use App\Form\Waste2Type;
use App\Repository\NotificationRepository;
use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TruckRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class HomeController extends AbstractController
{

    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/waste/create', name: 'app_waste_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
{
    $waste = new Waste();
    $notif = new Notification();
    $form = $this->createForm(Waste2Type::class, $waste);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $notif->setTitle($form->getData()->type);
        $location = $form->getData()->location;
        $description = "Location is: " . ($location ? $location : "unknown");
        $date = new \DateTime();
        $notif->setDate($date);
        $notif->setDescription($description);

        $entityManager->persist($notif);
        $entityManager->persist($waste);
        $entityManager->flush();
        $wasteInfo = [
            'type' => $waste->getType(),
            'location' => $waste->getLocation(),
            'etat' => $waste->getEtat(),
            'quantite' => $waste->getQuantite(),
        ];
        
        
        // Redirect to the thanks route with the waste_info as a query parameter
        return $this->redirectToRoute('thanks', ['waste_info' => $wasteInfo], Response::HTTP_SEE_OTHER);
    }
    

    return $this->renderForm('waste/affecter waste.html.twig', [
        'waste' => $waste,
        'form' => $form,
    ]);
}


}
