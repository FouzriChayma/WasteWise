<?php

namespace App\Controller;

use App\Entity\StoreHouse;
use App\Form\StoreHouseType;
use App\Repository\StoreHouseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/store/house')]
class StoreHouseController extends AbstractController
{
    #[Route('/', name: 'app_store_house_index', methods: ['GET'])]
    public function index(StoreHouseRepository $storeHouseRepository): Response
    {
        return $this->render('store_house/index.html.twig', [
            'store_houses' => $storeHouseRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_store_house_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $storeHouse = new StoreHouse();
        $form = $this->createForm(StoreHouseType::class, $storeHouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($storeHouse);
            $entityManager->flush();

            return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('store_house/new.html.twig', [
            'store_house' => $storeHouse,
            'form' => $form,
        ]);
    }

    #[Route('/{idSh}', name: 'app_store_house_show', methods: ['GET'])]
    public function show(StoreHouse $storeHouse): Response
    {
        return $this->render('store_house/show.html.twig', [
            'store_house' => $storeHouse,
        ]);
    }

    #[Route('/{idSh}/edit', name: 'app_store_house_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StoreHouse $storeHouse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StoreHouseType::class, $storeHouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('store_house/edit.html.twig', [
            'store_house' => $storeHouse,
            'form' => $form,
        ]);
    }

    #[Route('/{idSh}', name: 'app_store_house_delete', methods: ['POST'])]
    public function delete(Request $request, StoreHouse $storeHouse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$storeHouse->getIdSh(), $request->request->get('_token'))) {
            $entityManager->remove($storeHouse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
    }
}
