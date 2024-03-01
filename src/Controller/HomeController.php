<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StockRepository;
use App\Repository\OurOrderRepository;
use Dompdf\Dompdf;
use Dompdf\Options;

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

}
