<?php

namespace App\Controller;

use App\Entity\OurOrder;
use App\Form\OurOrderType;
use App\Repository\OurOrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stock;
use App\Service\MailjetService;

use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

#[Route('/our/order')]
class OurOrderController extends AbstractController
{
    
    #[Route('/', name: 'app_our_order_index', methods: ['GET'])]
public function index(Request $request, OurOrderRepository $ourOrderRepository): Response
{
    $page = $request->query->getInt('page', 1);
    $pageSize = 3;

     // Get the total number of orders
     $totalOrders = $ourOrderRepository->getTotalOrders();
     $mostOrderedStock = $ourOrderRepository->getMostOrderedStock();

     $totalSalesCount = $ourOrderRepository->getTotalSalesCount();

     $cancelledOrders = $ourOrderRepository->getCancelledOrdersCount();
    $pendingOrders = $ourOrderRepository->getPendingOrdersCount();
    $deliveredOrders = $ourOrderRepository->getDeliveredOrdersCount();

    

    $totalOrdersCount = count($ourOrderRepository->findAll());
    $totalPages = ceil($totalOrdersCount / $pageSize);

    $offset = ($page - 1) * $pageSize;

    $searchQuery = $request->query->get('search');
    $sortField = $request->query->get('sortField', 'idO'); // Default sort field to 'idO' if not provided
    $sortOrder = $request->query->get('sortOrder', 'asc');

    if ($searchQuery) {
        $ourOrders = $ourOrderRepository->searchOrders($searchQuery, $page, $pageSize);
        $totalOrdersCount = count($ourOrders);
        $totalPages = ceil($totalOrdersCount / $pageSize);
    } else {
        $ourOrders = $ourOrderRepository->findAllWithSorting($sortField, $sortOrder, $pageSize, $offset);
    }

    $sortOptions = [
        'idO' => 'Order ID',
        'quantityO' => 'Quantity',
        'statusO' => 'Status',
    ];


    return $this->render('our_order/index.html.twig', [
        'our_orders' => $ourOrders,
        'page' => $page,
        'total_pages' => $totalPages,
        'sortOptions' => $sortOptions,
        'currentSortField' => $sortField,
        'currentSortOrder' => $sortOrder,
        'totalOrders' => $totalOrders, // Pass totalOrders to the template
        'mostOrderedStock' => $mostOrderedStock,
        'totalSalesCount' => $totalSalesCount,
        'cancelledOrders' => $cancelledOrders,
        'pendingOrders' => $pendingOrders,        
        'deliveredOrders' => $deliveredOrders,


    ]);
}


#[Route('/PDF_Reserver', name: 'PDF_Reserver', methods: ['GET'])]
public function PDF_Reserver(OurOrderRepository $ourOrderRepository)
{   
    $result = $ourOrderRepository->findAll();

    // Configure Dompdf according to your needs
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');

    // Instantiate Dompdf with our options
    $dompdf = new Dompdf($pdfOptions);
    
    // Retrieve the HTML generated in our twig file
    $html = $this->renderView('our_order/pdf_list.html.twig', [
        'our_orders' => $result  // Pass 'our_orders' instead of 'orders'
    ]);

    // Load HTML to Dompdf
    $dompdf->loadHtml($html);
    // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser (inline view)
    $dompdf->stream("List_of_orders.pdf", [
        "Attachment" => false
    ]);
}




#[Route('/new', name: 'app_our_order_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
{ 
    // Create a new OurOrder instance
    $ourOrder = new OurOrder();

    // Set the user ID for the OurOrder entity
    
    // Set default statusO to "Pending" only if the form is being submitted (POST request)
    if ($request->isMethod('POST')) {
        $ourOrder->setStatusO('Pending');
    }

    // Create and handle the form
    $form = $this->createForm(OurOrderType::class, $ourOrder, ['exclude_status' => true]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $user = $this->getUser();   // Get the currently authenticated user
        if (!$user) {
            throw $this->createNotFoundException('The user does not exist');
        }
        $ourOrder->setIdUser($user);
        
        // Update the quantity in stock
        $stock = $ourOrder->getStock();
        if ($stock instanceof Stock) {
            $quantityOrdered = $ourOrder->getQuantityO();
            $currentStockQuantity = $stock->getQuantitySt();
            if ($quantityOrdered <= $currentStockQuantity) {
                $stock->setQuantitySt($currentStockQuantity - $quantityOrdered);
                $entityManager->persist($stock);
            } else {
                // Handle insufficient stock error here
            }
        } else {
            // Handle missing stock error here
        }        

        // Persist and flush the OurOrder entity
        $entityManager->persist($ourOrder);
        $entityManager->flush();    
        
        // Redirect to the index page after successful submission
        return $this->redirectToRoute('app_our_order_index');
    }

    // Render the form template with the OurOrder instance and the form
    return $this->renderForm('our_order/new.html.twig', [
        'our_order' => $ourOrder,
        'form' => $form,
    ]);
}

    


    #[Route('/{idO}', name: 'app_our_order_show', methods: ['GET'])]
    public function show(OurOrder $ourOrder): Response
    {
        return $this->render('our_order/show.html.twig', [
            'our_order' => $ourOrder,
        ]);
    }

    #[Route('/{idO}/edit', name: 'app_our_order_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, OurOrder $ourOrder, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(OurOrderType::class, $ourOrder);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->flush();

        return $this->redirectToRoute('app_our_order_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('our_order/edit.html.twig', [
        'our_order' => $ourOrder,
        'form' => $form,
    ]);
}

 
#[Route('/send-email/{id}', name: 'send_order_email')]
public function sendOrderEmail(OurOrderRepository $orderRepository, MailjetService $mailjetService, int $id): Response
{
    $order = $orderRepository->find($id);

    if (!$order) {
        $this->addFlash('error', 'Order not found.');
        return $this->redirectToRoute('orders_management');
    }

    // Assuming MailjetService is properly set up to send emails
    $content = "Details about your order..."; // Customize this
    $mailjetService->sendMail($content, $order->getEmailU(), 'Customer');

    $this->addFlash('success', 'Email sent successfully!');
    return $this->redirectToRoute('app_our_order_index');
}


    #[Route('/{idO}', name: 'app_our_order_delete', methods: ['POST'])]
    public function delete(Request $request, OurOrder $ourOrder, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ourOrder->getIdO(), $request->request->get('_token'))) {
            $entityManager->remove($ourOrder);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_our_order_index', [], Response::HTTP_SEE_OTHER);
    }

    
}