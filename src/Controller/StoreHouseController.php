<?php

namespace App\Controller;

use App\Entity\StoreHouse;
use App\Form\StoreHouseType;
use App\Repository\StoreHouseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/store/house')]
class StoreHouseController extends AbstractController
{
   
    #[Route('/', name: 'app_store_house_index', methods: ['GET'])]
    public function index(StoreHouseRepository $storeHouseRepository, Request $request): Response
    {
        // Pagination
        $page = $request->query->getInt('page', 1);
        $pageSize = 5; // Number of items per page
    
        // Search query
        $searchQuery = $request->query->get('search');
    
        // Sort options
        $sortOptions = [
            'nameSh' => 'Name',
            'locationSh' => 'Location',
            'capacity' => 'Capacity',
            'quantitySum' => 'Quantity Sum',
        ];
    
        $sortField = $request->query->get('sortField', 'nameSh');
        $sortOrder = $request->query->get('sortOrder', 'asc');
    
        $offset = ($page - 1) * $pageSize;
    
        if ($searchQuery) {
            // Fetch store houses matching the search query
            $storeHouses = $storeHouseRepository->findBySearchQuery($searchQuery);
            $totalStoreHousesCount = count($storeHouses);
        } else {
            // Fetch all store houses with sorting
            $storeHouses = $storeHouseRepository->findAllWithSorting($sortField, $sortOrder, $pageSize, $offset);
            $totalStoreHousesCount = count($storeHouses);
        }
    
        // Calculate total pages
        $totalPages = ceil($totalStoreHousesCount / $pageSize);
    
        return $this->render('store_house/index.html.twig', [
            'store_houses' => $storeHouses,
            'page' => $page,
            'total_pages' => $totalPages,
            'sortOptions' => $sortOptions,
            'currentSortField' => $sortField,
            'currentSortOrder' => $sortOrder,
        ]);
    }
    
    

    #[Route('/new', name: 'app_store_house_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $storeHouse = new StoreHouse();
        $form = $this->createForm(StoreHouseType::class, $storeHouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($storeHouse);
            $entityManager->flush();

            return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('store_house/new.html.twig', [
            'store_house' => $storeHouse,
            'form' => $form,
        ]);
    }
    

   #[Route('/{id}/orders', name: 'storehouse_orders')]
public function showOrders(StoreHouse $storehouse): Response
{
    // Retrieve all stocks belonging to the storehouse
    $stocks = $storehouse->getStocks();

    // Initialize an empty array to store orders
    $orders = [];

    // Iterate over each stock to retrieve its associated orders
    foreach ($stocks as $stock) {
        // Retrieve orders associated with the current stock
        $stockOrders = $stock->getOurOrders();
        
        // Add the orders to the $orders array
        foreach ($stockOrders as $order) {
            $orders[] = $order;
        }
    }

    // Pass the $orders variable to the Twig template
    return $this->render('store_house/show.html.twig', [
        'storehouse' => $storehouse,
        'orders' => $orders,
    ]);
}
    
    #[Route('/{idSh}', name: 'app_store_house_show', methods: ['GET'])]
    public function show(StoreHouse $storeHouse): Response
    {
        return $this->render('store_house/show.html.twig', [
            'store_house' => $storeHouse,
        ]);
    }

    #[Route('/{idSh}/edit', name: 'app_store_house_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, StoreHouse $storeHouse, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StoreHouseType::class, $storeHouse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('store_house/edit.html.twig', [
            'store_house' => $storeHouse,
            'form' => $form,
        ]);
    }

    #[Route('/{idSh}', name: 'app_store_house_delete', methods: ['POST'])]
    public function delete(Request $request, StoreHouse $storeHouse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$storeHouse->getIdSh(), $request->request->get('_token'))) {
            $entityManager->remove($storeHouse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_store_house_index', [], Response::HTTP_SEE_OTHER);
    }
}
