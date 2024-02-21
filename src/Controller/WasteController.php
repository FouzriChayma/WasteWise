<?php

namespace App\Controller;

use App\Entity\Waste;
use App\Form\WasteType;
use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/waste')]
class WasteController extends AbstractController
{
    #[Route('/', name: 'app_waste_index', methods: ['GET'])]
    public function index(WasteRepository $wasteRepository): Response
    {
        return $this->render('waste/index.html.twig', [
            'wastes' => $wasteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_waste_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $waste = new Waste();
        $form = $this->createForm(WasteType::class, $waste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($waste);
            $entityManager->flush();

            return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('waste/new.html.twig', [
            'waste' => $waste,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_waste_show', methods: ['GET'])]
    public function show(Waste $waste): Response
    {
        return $this->render('waste/show.html.twig', [
            'waste' => $waste,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_waste_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Waste $waste, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(WasteType::class, $waste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('waste/edit.html.twig', [
            'waste' => $waste,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_waste_delete', methods: ['POST'])]
    public function delete(Request $request, Waste $waste, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$waste->getId(), $request->request->get('_token'))) {
            $entityManager->remove($waste);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
    }
    
}
