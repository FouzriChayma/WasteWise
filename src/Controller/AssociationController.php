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

use Knp\Component\Pager\PaginatorInterface;


#[Route('/association')]
class AssociationController extends AbstractController
{
    #[Route('/show', name: 'app_association_index', methods: ['GET'])]
    public function index(AssociationRepository $associationRepository,PaginatorInterface $paginator,Request $request): Response
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
    #[Route('/login', name: 'login', methods: ['GET', 'POST'])]
public function login(Request $request, ManagerRegistry $registry)
{
    $associationName = $request->request->get('name'); // Récupérer le nom saisi dans le formulaire
    $associationEmail = $request->request->get('email'); // Récupérer l'email saisi dans le formulaire

    // Initialiser la variable errorMessage à null
    $errorMessage = null;

    // Vérifier si le formulaire a été soumis
    if ($request->isMethod('POST')) {
        // Vérifier si l'association existe dans la base de données par son nom ou son email
        $entityManager = $registry->getManager();
        $association = $entityManager->getRepository(Association::class)->findOneBy(['name' => $associationName]);

        // Si l'association n'a pas été trouvée par son nom, essayer de la trouver par son email
        if (!$association && $associationEmail) {
            $association = $entityManager->getRepository(Association::class)->findOneBy(['email' => $associationEmail]);
        }

        // Si l'association est trouvée, créer une session pour l'association et rediriger vers son espace membre
        if ($association) {
            $request->getSession()->set('association_id', $association->getId_association());
            return $this->redirectToRoute('yesorno');
        }

        // Si l'association n'est pas trouvée, définir le message d'erreur
        $errorMessage = 'Invalid name or email.';
    }

    // Afficher la page de connexion avec le message d'erreur
    return $this->render('association/compte.html.twig', ['errorMessage' => $errorMessage]);
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
            $this->addFlash('success', 'Your association has been successfully updated'); 

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