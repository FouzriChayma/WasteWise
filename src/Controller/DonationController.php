<?php

namespace App\Controller;

use App\Entity\Donation;
use App\Form\DonationType;
use App\Repository\DonationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/donation')]
class DonationController extends AbstractController
{
    #[Route('/show', name: 'app_donation_index', methods: ['GET'])]
    public function index(DonationRepository $donationRepository): Response
    {
        return $this->render('donation/index.html.twig', [
            'donations' => $donationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_donation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $donation = new Donation();
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donation->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($donation);
            $entityManager->flush();

            return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('donation/new.html.twig', [
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    

    #[Route('/{id}/edit', name: 'app_donation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Donation $donation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(DonationType::class, $donation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donation->setCreatedAt(new \DateTimeImmutable());
            $entityManager->flush();

            return $this->redirectToRoute('app_donation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('donation/edit.html.twig', [
            'donation' => $donation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_donation_delete')]
    public function delete(DonationRepository $repo,$id, ManagerRegistry $mr): Response
    {
        $donation=$repo->find($id);
        $em=$mr->getManager();
        $em->remove($donation);
        $em->flush();

        return $this->redirectToRoute('app_donation_index');
    }

    #[Route('/dql', name: 'dql', methods: ['POST'])]//recherche avec dql
    public function dql(EntityManagerInterface $em, Request $request, DonationRepository $repo):Response
    {  
       $result=$repo->findAll();
       $req=$em->createQuery("select d from App\Entity\Donation d where d.quantity=:n OR d.createdAt=:n OR d.Description=:n OR d.id=:n");
       if($request->isMethod('post'))
       {
           $value=$request->get('test');
           $req->setParameter('n',$value);

           $result=$req->getResult();

       }
       
       return $this->render('donation/index.html.twig',[
           'donations'=>$result,
           ]);
       
    }

   

    

    

    
}
