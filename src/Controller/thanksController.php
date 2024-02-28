<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Waste;
use App\Form\waste2Type;
use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\TruckRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class thanksController extends AbstractController
{
    #[Route('/thanks', name: 'thanks')]
    public function thanks(): Response
    {
        return $this->render('waste/confirmation.html.twig');
    }
    
}
