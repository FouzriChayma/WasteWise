<?php

namespace App\Controller;

use App\Entity\Truck;
use App\Form\TruckType;
use App\Repository\TruckRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/truck')]
class TruckController extends AbstractController
{
    #[Route('/', name: 'app_truck_index', methods: ['GET'])]
    public function index(TruckRepository $truckRepository): Response
    {
        return $this->render('truck/index.html.twig', [
            'trucks' => $truckRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_truck_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $truck = new Truck();
        $form = $this->createForm(TruckType::class, $truck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($truck);
            $entityManager->flush();

            return $this->redirectToRoute('app_truck_index', [], Response::HTTP_SEE_OTHER);
        }

        // If the form is not valid, render the form again with validation errors
        return $this->renderForm('truck/new.html.twig', [
            'truck' => $truck,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_truck_show', methods: ['GET'])]
    public function show(Truck $truck): Response
    {
        return $this->render('truck/show.html.twig', [
            'truck' => $truck,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_truck_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Truck $truck, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TruckType::class, $truck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_truck_index', [], Response::HTTP_SEE_OTHER);
        }

        // If the form is not valid, render the form again with validation errors
        return $this->renderForm('truck/edit.html.twig', [
            'truck' => $truck,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_truck_delete', methods: ['POST'])]
    public function delete(Request $request, Truck $truck, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$truck->getId(), $request->request->get('_token'))) {
            $entityManager->remove($truck);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_truck_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}', name: 'app_truck_delete')]
    public function deletec(TruckRepository $repo,$id, ManagerRegistry $mr): Response
    {
        $truck=$repo->find($id);
        $em=$mr->getManager();
        $em->remove($truck);
        $em->flush();

        return $this->redirectToRoute('app_truck_index');
    }
}
