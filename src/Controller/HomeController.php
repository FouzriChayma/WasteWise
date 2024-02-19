<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Association;
use App\Form\AssociationType;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/thanks', name: 'thanks')]
    public function thanks(): Response
    {
        return $this->render('home/thanks.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/yesorno', name: 'yesorno')]
    public function yesorno(): Response
    {
        return $this->render('home/yesorno.html.twig', [
            'controller_name' => 'HomeController',
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
   

    
}
