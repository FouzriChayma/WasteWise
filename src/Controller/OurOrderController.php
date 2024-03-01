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
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;


#[Route('/our/order')]
class OurOrderController extends AbstractController
{
    #[Route('/', name: 'app_our_order_index', methods: ['GET'])]
public function index(Request $request, OurOrderRepository $ourOrderRepository): Response
{
    $page = $request->query->getInt('page', 1);
    $pageSize = 7;
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


    #[Route('/thanks', name: 'thanks')]
    public function thanks(): Response
    {
        return $this->render('our_order/thanks.html.twig');
    }

    #[Route('/new', name: 'app_our_order_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $ourOrder = new OurOrder();

    // Set default statusO to "Pending" only if the form is being submitted (POST request)
    if ($request->isMethod('POST')) {
        $ourOrder->setStatusO('Pending');
    }

    $form = $this->createForm(OurOrderType::class, $ourOrder, ['exclude_status' => true]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
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

        // Persist the new order
        $entityManager->persist($ourOrder);
        $entityManager->flush();

        return $this->redirectToRoute('thanks'); // Update redirection here
    }

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