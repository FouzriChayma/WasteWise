<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\PassType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(UserType::class, $user,['is_edit' => "yes"]);
    $form->handleRequest($request);
    $isb=$user->getIsBanned();
    $isv=$user->getIsVerified();
    
    if ($form->isSubmitted() && $form->isValid()) {
        
        // Récupérer le fichier
        $file = $form->get('ImagePath')->getData();
        
        // Vérifier si un fichier a été téléchargé
        if ($file) {
            // Générer un nom unique pour le fichier
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Déplacer le fichier vers le répertoire où les images sont stockées
            try {
                $file->move(
                    $this->getParameter('kernel.project_dir') . '/public/images',
                    $fileName
                );
            } catch (FileException $e) {
                // Gérer l'exception si le déplacement du fichier échoue
                // Par exemple, afficher un message d'erreur
            }

            // Mettre à jour le chemin de l'image dans l'entité User
            $user->setImagePath($fileName);
        }
        
        // Mettre à jour les autres champs de l'utilisateur
        $dateObject = $form->get('ddn')->getData();
        $user->setDdn($dateObject);
        $user->setIsBanned($isb);
        $user->setIsBanned($isv);
        $entityManager->flush();

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('user/edit.html.twig', [
        'user' => $user,
        'form' => $form,
    ]);
}
    #[Route('/{id}/editPassword', name: 'edit_password', methods: ['GET', 'POST'])]
    public function editPass(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PassType::class);
        $form->handleRequest($request);
       

        return $this->renderForm('user/editPass.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/confirmRole', name: 'confirm_role', methods: ['GET', 'POST'])]
    public function ConfirmRole(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
      $prefrole=$user->getPrefrole();
      $user->setRole($prefrole);
      $entityManager->flush();
      return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);

    }
    #[Route('/{id}/editPassword/DB', name: 'edit_password_db', methods: ['GET', 'POST'])]
    public function editPassDB(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $request->get('password')
            )
        );
        $entityManager->flush();
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
