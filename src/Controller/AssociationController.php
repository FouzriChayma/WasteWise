<?php

namespace App\Controller;

use App\Entity\Association;
use App\Form\AssociationType;
use App\Repository\AssociationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

#[Route('/association')]
class AssociationController extends AbstractController
{
    #[Route('/show', name: 'app_association_index', methods: ['GET'])]
    public function index(AssociationRepository $associationRepository): Response
    {
        return $this->render('association/index.html.twig', [
            'associations' => $associationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_association_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $association = new Association();
        $form = $this->createForm(AssociationType::class, $association);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($association);
            $entityManager->flush();

            return $this->redirectToRoute('yesorno', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('association/new.html.twig', [
            'association' => $association,
            'form' => $form,
        ]);
    }

    

    #[Route('/{id}/edit', name: 'app_association_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Association $association, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AssociationType::class, $association);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_association_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('association/edit.html.twig', [
            'association' => $association,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_association_delete')]
    public function delete(AssociationRepository $repo,$id, ManagerRegistry $mr): Response
    {
         
            $association=$repo->find($id);
            $em=$mr->getManager();
            $em->remove($association);
            $em->flush();
        

        return $this->redirectToRoute('app_association_index');
    }

    #[Route('/recherche', name: 'recherche', methods: ['POST'])]//recherche avec dql
    public function recherche(EntityManagerInterface $em, Request $request, AssociationRepository $repo):Response
    {  
       $result=$repo->findAll();
       $req=$em->createQuery("select a from App\Entity\Association a where a.name=:n OR a.adresse = :n OR a.email = :n OR a.id_association=:n");
       if($request->isMethod('post'))
       {
           $value=$request->get('test');
           $req->setParameter('n',$value);

           $result=$req->getResult();

       }
       
       return $this->render('association/index.html.twig',[
           'associations'=>$result,
           ]);
       
    }



    

    // #[Route('/add_association', name: 'add_association', methods: ['GET', 'POST'])]
    // public function addAssociation(Request $request, ManagerRegistry $mr): Response
    // {
    // // ... other controller logic

    // $associationAlreadyHasAccount = false; // By default, the association doesn't have an account yet

    // if ($request->isMethod('POST')) {
    //     // Check if the form was submitted

    //     // Vérifier si l'association existe déjà dans la base de données
    //     $associationName = $request->request->get('AssociationType')['name']; // Adjust the key based on your form

    //     // Access the entity manager using the injected EntityManagerInterface
    //     $existingAssociation = $mr->getManager()->getRepository(Association::class)->findOneBy(['name' => $associationName]);

    //     if ($existingAssociation) {
    //         $associationAlreadyHasAccount = true;
    //     }

    //     // ... other controller logic
    // }

    // return $this->render('association/compte.html.twig', [
    //     'associationAlreadyHasAccount' => $associationAlreadyHasAccount,
    //     // ... other variables to pass to the template
    // ]);
    // }


   

    

   
}
