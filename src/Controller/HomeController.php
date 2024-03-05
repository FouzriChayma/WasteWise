<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Association;
use App\Entity\Donation;
use App\Form\AssociationType;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\DonationRepository;
use App\Repository\AssociationRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/statistiques', name: 'app_donation_statistiques', methods: ['GET'])]
    public function statistiques(ManagerRegistry $managerRegistry): Response
    {
        $entityManager = $managerRegistry->getManager();

        $statistiques = $entityManager->getRepository(Donation::class)
            ->createQueryBuilder('d')
            ->select('a.name as associationName, SUM(d.quantity) as totalQuantity')
            ->leftJoin('d.association', 'a')
            ->groupBy('a.name')
            ->getQuery()
            ->getResult();

        return $this->render('association/stat.html.twig', [
            'statistiques' => $statistiques,
        ]);
    }

    #[Route('/home2', name: 'app_home2')]
    public function index2(): Response
    {
        return $this->render('home/index2.html.twig', [
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

    #[Route('/chatbot', name: 'chatbot')]
    public function chatbot(): Response
    {
        return $this->render('donation/chatbot.html.twig', [
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

    #[Route('/PDF_Reserver', name: 'PDF_Reserver', methods: ['GET'])]
    public function PDF_Reserver(DonationRepository $donationRepository)
    {   
        $result=$donationRepository->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('donation/print.html.twig', [
            'donations' => $result
        ]);
    
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("List_of_donations.pdf",[
            "Attachment" => false
        ]);
    }

    #[Route('/PDF_Reserver2', name: 'PDF_Reserver2', methods: ['GET'])]
    public function PDF_Reserver2(AssociationRepository $associationRepository)
    {   
        $result=$associationRepository->findAll();
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('association/print.html.twig', [
            'associations' => $result
        ]);
    
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("List_of_Associations.pdf",[
            "Attachment" => false
        ]);
    }


    #[Route('/tri-quantity', name: 'tri_quantity')]
    public function triPrix(Request $request, DonationRepository $donationRepository): Response
    {
        $tri = $request->query->get('tri', 'asc'); // Par défaut, tri croissant
        $donations = $donationRepository->findBy([], ['quantity' => $tri]);

        return $this->render('donation/index.html.twig', [
            'donations' => $donations,
        ]);
    }

    #[Route('/tri-quantity2', name: 'tri_quantity2')]
    public function triPrix2(Request $request, AssociationRepository $associationRepository): Response
    {
        $tri = $request->query->get('tri', 'asc'); // Par défaut, tri croissant
        $associations = $associationRepository->findBy([], ['name' => $tri]);

        return $this->render('association/index.html.twig', [
            'associations' => $associations,
        ]);
    }


    #[Route('/total-quantite', name: 'total_quantite', methods: ['GET'])]
    public function totalPrix(DonationRepository $donationRepository): JsonResponse
    {
        // Récupérer tous les produits
        $donations = $donationRepository->findAll();

        // Initialiser le total à zéro
        $total = 0;

        // Itérer sur chaque produit et ajouter son prix au total
        foreach ($donations as $donations) {
            // Assurez-vous que le prix est un nombre valide avant de l'ajouter
            if (is_numeric($donations->getQuantity())) {
                $total += $donations->getQuantity();
            }
        }

        // Retourner le total au format JSON
        return $this->json(['total' => $total]);
    }

   

    
}
