<?php

namespace App\Controller;

use App\Entity\Stock;
use App\Form\Stock2Type;
use App\Repository\StockRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StoreHouseRepository;


#[Route('/stock')]
class StockController extends AbstractController
{
    // StockController.php

// StockController.php

#[Route('/', name: 'app_stock_index', methods: ['GET'])]
public function index(StockRepository $stockRepository, Request $request): Response
{
    $page = $request->query->getInt('page', 1);
    $pageSize = 5;
    $totalStocksCount = count($stockRepository->findAll());
    $totalPages = ceil($totalStocksCount / $pageSize);

    $offset = ($page - 1) * $pageSize;

    $searchQuery = $request->query->get('search');
    $sortField = $request->query->get('sortField', 'name_st');
    $sortOrder = $request->query->get('sortOrder', 'asc');

    if ($searchQuery) {
        $stocks = $stockRepository->findBySearchQuery($searchQuery);
        $totalStocksCount = count($stocks);
        $totalPages = ceil($totalStocksCount / $pageSize);
    } else {
        $stocks = $stockRepository->findAllWithSorting($sortField, $sortOrder, $pageSize, $offset);
    }

    $sortOptions = [
        'name_st' => 'Name',
        'quantity_st' => 'Quantity',
        'selling_price' => 'Selling Price',
        'buying_price' => 'Buying Price',
    ];

    return $this->render('stock/index.html.twig', [
        'stocks' => $stocks,
        'page' => $page,
        'total_pages' => $totalPages,
        'sortOptions' => $sortOptions,
        'currentSortField' => $sortField,
        'currentSortOrder' => $sortOrder,
    ]);
}



#[Route('/Recyclable/materials', name: 'app_stock_recyclable_materials', methods: ['GET'])]
public function allfront(Request $request, StockRepository $stockRepository): Response
{
    $searchQuery = $request->query->get('search');

    // Filter stocks based on search query
    $stocks = $stockRepository->findBy1($searchQuery);

    return $this->render('stock/show.html copy.twig', [
        'stocks' => $stocks,
    ]);
}


    #[Route('/new', name: 'app_stock_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, StoreHouseRepository $storeHouseRepository): Response
    {
        $stock = new Stock();
        $form = $this->createForm(Stock2Type::class, $stock, [
            'exclude_date_d_ajout' => true,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $storehouse = $stock->getStorehouse();
            $stockQuantity = $stock->getQuantitySt();
            
            if ($storehouse && $storehouse->getCapacity() < $storehouse->getQuantitySum() + $stockQuantity) {
                $this->addFlash('error', 'Adding this stock will exceed the capacity of the selected storehouse.');
                return $this->redirectToRoute('app_stock_new');
            }

            $stock->setDefaultDate();
            $file = $form->get('image_st')->getData();
            if ($file) {
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
    
            // Move the file to the directory where images are stored
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public' ;
            $file->move(
                $targetDirectory,
                $fileName
            );
    
            // Set the image file name in the Stock entity
            $stock->setImageSt($fileName);
        }
            
            $entityManager->persist($stock);
            $entityManager->flush();

            return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('stock/new.html.twig', [
            'stock' => $stock,
            'form' => $form,
        ]);
    }



    #[Route('/{idSt}', name: 'app_stock_show', methods: ['GET'])]
    public function show(Stock $stock): Response
    {
        return $this->render('stock/show.html.twig', [
            'stock' => $stock,
        ]);
    }

    #[Route('/{idSt}/edit', name: 'app_stock_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Stock $stock, EntityManagerInterface $entityManager): Response
{
    // Exclude the 'date_d_ajout_st' field from the form
    $form = $this->createForm(Stock2Type::class, $stock, [
        'exclude_date_d_ajout' => true,
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // If a new file is uploaded, handle it before flushing
        $file = $form->get('image_st')->getData();

        if ($file) {
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $this->getParameter('kernel.project_dir') . '/public',
                $fileName
            );
            $stock->setImageSt($fileName);
        } elseif (!$file && $stock->getImageSt()) {
            // If no new file is uploaded, but there is an existing image, keep it
            $stock->setImageSt($stock->getImageSt());
        }

        $entityManager->flush();

        return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('stock/edit.html.twig', [
        'stock' => $stock,
        'form' => $form,
    ]);
}




    #[Route('/{idSt}', name: 'app_stock_delete', methods: ['POST'])]
    public function delete(Request $request, Stock $stock, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$stock->getIdSt(), $request->request->get('_token'))) {
            $entityManager->remove($stock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_stock_index', [], Response::HTTP_SEE_OTHER);
    }
}
