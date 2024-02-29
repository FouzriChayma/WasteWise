<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Waste;
use App\Form\Waste2Type;
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
        $form = $this->createForm(Waste2Type::class, $waste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($waste);
            $entityManager->flush();

            return $this->redirectToRoute('thanks', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('waste/affecter waste.html.twig', [
            'waste' => $waste,
            'form' => $form,
        ]);
    }
}
