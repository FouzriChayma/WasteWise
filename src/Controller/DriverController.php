<?php

namespace App\Controller;

use App\Repository\MissionRepository;
use App\Repository\PlanificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DriverController extends AbstractController
{
    #[Route('/driver', name: 'app_driver')]
    public function index(): Response
    {
        return $this->render('driver/index.html.twig', [
            'controller_name' => 'DriverController',
        ]);
    }
    
    #[Route('/DetailMissions/{id}',name:'Detail')]
function DetailMission($id,MissionRepository $repoM,PlanificationRepository $repP/*, UserInterface $user*/){
    // Récupérer l'id du driver connecté
    $driver_id =1; /*$user->getId();*/

    // Récupérer les missions en fonction de l'id du driver
    $obj = $repoM->getMissionsByDriver($driver_id);

    // Récupérer la planification en fonction de l'id
    $result = $repP->find($id);

    // Retourner la vue avec les missions et la planification
    return $this->render(
        'driver/index.html.twig',
        ['missions' => $obj, 'j' => $result]
    );
}
}
