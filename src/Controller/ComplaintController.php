<?php

namespace App\Controller;

use App\Entity\Complaint;
use App\Entity\Reponse;
use App\Form\ComplaintType;
use App\Form\ReponseType;
use App\Repository\ComplaintRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComplaintController extends AbstractController
{
    #[Route('admin/complaint', name: 'app_complaint_index', methods: ['GET'])]
    public function index(ComplaintRepository $complaintRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $status = $request->query->get('status');
        if ($status) {
            $data = $complaintRepository->findBy(['status' => $status]);
        } else {
            $data = $complaintRepository->findAll();
        }
    
        $httpClient = HttpClient::create();
    
        foreach ($data as $complaint) {
            $location = $complaint->getLocation();
            $response = $httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
                'query' => [
                    'format' => 'json',
                    'lat' => explode(',', $location)[0],
                    'lon' => explode(',', $location)[1],
                ],
            ]);
    
            $address = $response->toArray()['display_name'];
            $complaint->setLocation($address);
        }
    
        $complaintsByLocation = $complaintRepository->countByLocation();
        $locations = array_keys($complaintsByLocation);
        $counts = array_values($complaintsByLocation);
    
        // Reverse geocode the locations
        $locationNames = [];
        foreach ($locations as $location) {
            $coords = explode(',', $location);
            $response = $httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
                'query' => [
                    'format' => 'json',
                    'lat' => $coords[0],
                    'lon' => $coords[1],
                ],
            ]);
    
            $address = $response->toArray()['display_name'];
            $locationNames[] = $address;
        }
    $pendingCount = $complaintRepository->count(['status' => 'Pending']);
    $inProgressCount = $complaintRepository->count(['status' => 'In Progress']);
    $resolvedCount = $complaintRepository->count(['status' => 'Resolved']);
        $complaints = $paginator->paginate(
            $data,
            $request->query->getInt('page', 1),
            10
        );
    
        return $this->render('complaint/index.html.twig', [
            'complaints' => $complaints,
            'chartData' => [
                'locations' => $locationNames, // Pass the reverse geocoded location names to the view
                'counts' => $counts,
            ],
            'pendingCount' => $pendingCount,
            'inProgressCount' => $inProgressCount,
            'resolvedCount' => $resolvedCount,
        ]);
    }
    

    

    #[Route('/complaint/new', name: 'app_complaint_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $complaint = new Complaint();
    $form = $this->createForm(ComplaintType::class, $complaint);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $user = $this->getUser(); // Get the currently logged-in user
        $complaint->setUser($user); // Set the user of the complaint
        $file = $form->get('picture')->getData();

            // Generate a unique name for the file before saving it
             
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
    
            // Move the file to the directory where brochures are stored
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public';
            $file->move(
                $targetDirectory,
                $fileName
            );
        $complaint->setPicture($fileName);
        $entityManager->persist($complaint);
        $entityManager->flush();

        return $this->redirectToRoute('complaints_by_user', [], Response::HTTP_SEE_OTHER);
    }
    return $this->renderForm('complaint/new.html.twig', [
        'complaint' => $complaint,
        'form' => $form,
    ]);
}

    #[Route('complaint/user/{id}', name: 'app_complaint_show')]
    public function show(Complaint $complaint, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Check if a response already exists
        $reponse = $complaint->getReponse();
        if (!$reponse) {
            // If no response exists, create a new one
            $reponse = new Reponse();
        }
    
        $form = $this->createForm(ReponseType::class, $reponse);
    
        // Handle the form submission...
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Set the complaint on the response and save it
            $reponse->setComplaint($complaint);
            $entityManager->persist($reponse);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_complaint_show', ['id' => $complaint->getId()]);
        }
    
        // Reverse geocode the complaint's location
        $location = $complaint->getLocation();
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
            'query' => [
                'format' => 'json',
                'lat' => explode(',', $location)[0],
                'lon' => explode(',', $location)[1],
            ],
        ]);
    
        $address = $response->toArray()['display_name'];
        $complaint->setLocation($address);
    
        return $this->render('complaint/show.html.twig', [
            'complaint' => $complaint,
            'complaintId' => $complaint->getId(), // Pass the complaintId to the template
            'form' => $form->createView(),
        ]);
    }
    
#[Route('/complaint/{id}/response', name: 'user_complaint_show')]
public function showUserComplaint(Complaint $complaint, Request $request, EntityManagerInterface $entityManager): Response
{
    // Check if a response already exists
    $reponse = $complaint->getReponse();
    if (!$reponse) {
        // If no response exists, create a new one
        $reponse = new Reponse();
    }

    $form = $this->createForm(ReponseType::class, $reponse);

    // Handle the form submission...
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Set the complaint on the response and save it
        $reponse->setComplaint($complaint);
        $entityManager->persist($reponse);
        $entityManager->flush();

        return $this->redirectToRoute('user_complaint_show', ['id' => $complaint->getId()]);
    }
// Reverse geocode the complaint's location
$location = $complaint->getLocation();
$httpClient = HttpClient::create();
$response = $httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
    'query' => [
        'format' => 'json',
        'lat' => explode(',', $location)[0],
        'lon' => explode(',', $location)[1],
    ],
]);

$address = $response->toArray()['display_name'];
$complaint->setLocation($address);
    return $this->render('complaint/showusercomplaint.html.twig', [
        'complaint' => $complaint,
        'complaintId' => $complaint->getId(), // Pass the complaintId to the template
        'form' => $form->createView(),
    ]);
}

    #[Route('/complaint/{id}/edit', name: 'app_complaint_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Complaint $complaint, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(ComplaintType::class, $complaint);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $form->get('picture')->getData();

        if ($file) {
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $targetDirectory = $this->getParameter('kernel.project_dir') . '/public';
            $file->move($targetDirectory, $fileName);
            $complaint->setPicture($fileName);
        }

        $entityManager->flush();

        return $this->redirectToRoute('complaints_by_user', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('complaint/edit.html.twig', [
        'complaint' => $complaint,
        'form' => $form,
    ]);
}
    #[Route('/complaint/{id}', name: 'app_complaint_delete', methods: ['POST'])]
    public function delete(Request $request, Complaint $complaint, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$complaint->getId(), $request->request->get('_token'))) {
            // Get the associated response
            $reponse = $complaint->getReponse();
    
            // Remove the response
            if ($reponse) {
                $entityManager->remove($reponse);
                $entityManager->flush();
            }
    
            // Now, remove the complaint
            $entityManager->remove($complaint);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('complaints_by_user', [], Response::HTTP_SEE_OTHER);
    }
    
    
    // #[Route('/complaint/admin', name: 'admin', methods: ['GET'])]
    // public function list(ComplaintRepository $complaintRepository): Response
    // {
    //     return $this->render('complaint/index.html.twig', [
    //         'complaints' => $complaintRepository->findAll(),
    //     ]);
    // }
    #[Route('/complaint/user', name: 'complaints_by_user', methods: ['GET'])]
    public function user_index(ComplaintRepository $complaintRepository): Response
    {
        $user = $this->getUser();
        $data = $complaintRepository->findBy(['user' => $user]);
        $httpClient = HttpClient::create();

    foreach ($data as $complaint) {
        $location = $complaint->getLocation();
        $response = $httpClient->request('GET', 'https://nominatim.openstreetmap.org/reverse', [
            'query' => [
                'format' => 'json',
                'lat' => explode(',', $location)[0],
                'lon' => explode(',', $location)[1],
            ],
        ]);
        $address = $response->toArray()['display_name'];
        $complaint->setLocation($address);
    }
        return $this->render('complaint/userindex.html.twig', [
            'complaints' => $data,
        ]);
    }
    // #[Route('/userreponse/{userId}', name: 'reponses_by_user', methods: ['GET'])]
    // public function reponsesByUser(ComplaintRepository $complaintRepository, ReponseRepository $reponseRepository, $userId): Response
    // {
    //     // Get complaints associated with the user
    //     $complaints = $complaintRepository->findBy(['user_id' => $userId]);

    //     // Extract response IDs associated with these complaints
    //     $complaintIds = array_map(function($complaint) {
    //         return $complaint->getId();
    //     }, $complaints);

    //     // Get responses associated with these complaints
    //     $reponses = $reponseRepository->findBy(['complaint' => $complaintIds]);

    //     return $this->render('reponse/index.html.twig', [
    //         'reponses' => $reponses,
    //     ]);
    // }
   
}