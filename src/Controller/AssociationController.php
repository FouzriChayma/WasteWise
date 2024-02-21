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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;


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
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $association = new Association();
        $form = $this->createForm(AssociationType::class, $association);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('ImagePath')->getData();

            // Generate a unique name for the file before saving it
             
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
    
            // Move the file to the directory where brochures are stored
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public';
            $file->move(
                $targetDirectory,
                $fileName
            );
            $association->setImagePath($fileName);
        
            $entityManager->persist($association);
            $entityManager->flush();

            $session->set('association_name',$association->getName());

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
            $newFile = $form->get('ImagePath')->getData();

        if ($newFile) {
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$newFile->guessExtension();

            // Move the file to the directory where brochures are stored
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public';
            $newFile->move($targetDirectory, $fileName);

            // Set the new file path
            $association->setImagePath($fileName);
        }
            
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

    #[Route('/recherche', name: 'recherche', methods: ['POST'])]
    public function recherche(EntityManagerInterface $em, Request $request, AssociationRepository $repo): Response
    {
        $qb = $em->createQueryBuilder();
        $qb->select('a')
            ->from('App\Entity\Association', 'a');
    
        if ($request->isMethod('POST')) {
            $searchTerm = $request->get('test');
            if ($searchTerm) {
                $qb->andWhere(
                    $qb->expr()->orX(
                        $qb->expr()->like('a.name', ':searchTerm'),
                        $qb->expr()->like('a.adresse', ':searchTerm'),
                        $qb->expr()->like('a.email', ':searchTerm'),
                        $qb->expr()->like('a.id_association', ':searchTerm')
                    )
                );
                $qb->setParameter('searchTerm', '%' . $searchTerm . '%');
            }
    
            // Ajouter une option de tri
           
    
            $result = $qb->getQuery()->getResult();
        }
    
        return $this->render('association/index.html.twig', [
            'associations' => $result,
        ]);
    }

    



    



    

}
