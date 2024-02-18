<?php

namespace App\Controller;

use App\Entity\Planification;
use App\Form\PlanificationType;
use App\Repository\PlanificationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/planification')]
class PlanificationController extends AbstractController
{
    #[Route('/', name: 'app_planification_index', methods: ['GET'])]
    public function index(PlanificationRepository $planificationRepository): Response
    {
        return $this->render('planification/index.html.twig', [
            'planifications' => $planificationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_planification_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $planification = new Planification();
        $form = $this->createForm(PlanificationType::class, $planification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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

    #[Route('/{id_plan}', name: 'app_planification_delete')]
    public function delete( PlanificationRepository $repo,$id_plan, ManagerRegistry $mr): Response
    {
        $planification=$repo->find($id_plan);
        $em=$mr->getManager();
        $em->remove($planification);
        $em->flush();

        return $this->redirectToRoute('app_planification_index', [], Response::HTTP_SEE_OTHER);
    }
}
