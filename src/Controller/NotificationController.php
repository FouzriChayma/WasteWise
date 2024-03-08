<?php
namespace App\Controller;

use App\Entity\Waste;
use App\Entity\Notification;

use App\Form\WasteType;

use App\Form\Waste2Type;

use App\Repository\WasteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\NotificationRepository;
use Doctrine\ORM\EntityManager;
use Knp\Component\Pager\PaginatorInterface;

class NotificationController extends AbstractController
{
#[Route('/notification/{id}', name: 'app_notification_delete', methods: ['POST'])]
public function deleteNotification(Request $request, Notification $notification, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$notification->getId(), $request->request->get('_token'))) {
        $entityManager->remove($notification);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_waste_index', [], Response::HTTP_SEE_OTHER);
}


}