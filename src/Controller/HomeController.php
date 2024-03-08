<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StockRepository;
use App\Repository\OurOrderRepository;
use App\Entity\Waste;

use App\Entity\Notification;

use App\Form\Waste2Type;
use App\Repository\NotificationRepository;
use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TruckRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\Persistence\ManagerRegistry;
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
    public function index(StockRepository $stockRepository): Response
    {
        $stocks = $stockRepository->findFirstFour(); // Assuming you have a method to fetch the first 4 stocks

        return $this->render('home/index.html.twig', [
            'stocks' => $stocks,
        ]);
    }
    #[Route('/', name: 'app_guest')]
    public function indexGuest(StockRepository $stockRepository): Response
    {
        $stocks = $stockRepository->findFirstFour(); // Assuming you have a method to fetch the first 4 stocks

        return $this->render('HomeGuest.html.twig', [
            'controller_name' => 'HomeController',
            'stocks' => $stocks,
        ]);
    }
    #[Route('/waste/create', name: 'app_waste_create', methods: ['GET', 'POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, NotificationRepository  $notificationRepository) : Response
{
    $waste = new Waste();
    $notif = new Notification();
    $form = $this->createForm(Waste2Type::class, $waste);
    $form->handleRequest($request);
    $notifications = $notificationRepository->findAll();
    if ($form->isSubmitted() && $form->isValid()) {
        $notif->setTitle($form->getData()->type);
        $location = $form->getData()->location;
        $description = "Location is: " . ($location ? $location : "unknown");
        $date = new \DateTime();
        $notif->setDate($date);
        $notif->setDescription($description);

        $entityManager->persist($notif);
        $entityManager->persist($waste);
        $entityManager->flush();
        $wasteInfo = [
            'type' => $waste->getType(),
            'location' => $waste->getLocation(),
            'etat' => $waste->getEtat(),
            'quantite' => $waste->getQuantite(),
        ];
        
        
        // Redirect to the thanks route with the waste_info as a query parameter
        return $this->redirectToRoute('thankswaste', ['waste_info' => $wasteInfo], Response::HTTP_SEE_OTHER);
    }
    

    return $this->renderForm('waste/affecter waste.html.twig', [
        'waste' => $waste,
        'form' => $form,
        'notifications' => $notifications,
    ]);
}
//LOUAY
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
#[Route('/chatbot', name: 'chatbot')]
    public function chatbot(): Response
    {
        return $this->render('donation/chatbot.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

#[Route('/home2', name: 'app_home2')]
public function index2(): Response
{
    return $this->render('home/index2.html.twig', [
        'controller_name' => 'HomeController',
    ]);
}

#[Route('/thanks', name: 'thanks_louay')]
public function thanks(): Response
{
    return $this->render('home/thanksLouay.html.twig', [
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



#[Route('/PDF_Reserver1', name: 'PDF_Reserver1', methods: ['GET'])]
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
