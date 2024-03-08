<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserEditType;
use App\Form\PassType;
use App\Form\RoleType;
use App\Form\PassTypeFront;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

#[Route('/user')]
class UserController extends AbstractController
{
#[Route('/search-users', name: 'search_users', methods: ['GET', 'POST'])]    
public function searchUsers(Request $request, UserRepository $utilisateurRepository): JsonResponse
{
    $searchTerm = $request->query->get('searchTerm');
    $users = $utilisateurRepository->searchAdmin($searchTerm); // Implement your search logic here

    // Return the search results as JSON
    return $this->json($users);
}
#[Route('/search-users-driver', name: 'search_users_driver', methods: ['GET', 'POST'])]    
public function searchUsersD(Request $request, UserRepository $utilisateurRepository): JsonResponse
{
    $searchTerm = $request->query->get('searchTerm');
    $users = $utilisateurRepository->searchDriver($searchTerm); // Implement your search logic here

    // Return the search results as JSON
    return $this->json($users);
}
#[Route('/search-users-supp', name: 'search_users_supp', methods: ['GET', 'POST'])]    
public function searchUsersS(Request $request, UserRepository $utilisateurRepository): JsonResponse
{
    $searchTerm = $request->query->get('searchTerm');
    $users = $utilisateurRepository->searchSupplier($searchTerm); // Implement your search logic here

    // Return the search results as JSON
    return $this->json($users);
}
#[Route('/search-users-client', name: 'search_users_client', methods: ['GET', 'POST'])]    
public function searchUsersC(Request $request, UserRepository $utilisateurRepository): JsonResponse
{
    $searchTerm = $request->query->get('searchTerm');
    $users = $utilisateurRepository->searchClient($searchTerm); // Implement your search logic here

    // Return the search results as JSON
    return $this->json($users);
}
    #[Route('/ExportPdf', name: 'app_user_pdf', methods: ['GET', 'POST'])]
    public function ExportPdf(UserRepository $utilisateurRepository) :Response
    {
          $users=$utilisateurRepository->findAll();
          $options = new Options();
        $options->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($options);
        $html = $this->renderView('user/pdf.html.twig', [
            // Pass any necessary data to your Twig template
            'users' => $users,
        ]);

        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to browser (inline view)
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function indexAdmin(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findByRole("Admin"),
        ]);
    }

    #[Route('/home/supplier', name: 'app_suppp_index', methods: ['GET'])]
    public function indexSupplierFront(UserRepository $userRepository): Response
    {
        return $this->render('baseFrontsupplier.html.twig', [
            'users' => $userRepository->findByRole("Supplier"),
        ]);
    }

    #[Route('/users', name: 'app_user_index_users', methods: ['GET'])]
    public function indexUsers(UserRepository $userRepository): Response
    {
        return $this->render('user/indexUsers.html.twig', [
            'users' => $userRepository->findByRole("User"),
        ]);
    }
    #[Route('/Suppliers', name: 'app_user_index_supp', methods: ['GET'])]
    public function indexSupplier(UserRepository $userRepository): Response
    {
        return $this->render('user/indexSupp.html.twig', [
            'users' => $userRepository->findByRole("Supplier"),
        ]);
    }
    #[Route('/Drivers', name: 'app_user_index_driver', methods: ['GET'])]
    public function indexDriver(UserRepository $userRepository): Response
    {
        return $this->render('user/indexDriver.html.twig', [
            'users' => $userRepository->findByRole("Driver"),
        ]);
    }
    #[Route('/Clients', name: 'app_user_index_client', methods: ['GET'])]
    public function indexClient(UserRepository $userRepository): Response
    {
        return $this->render('user/indexClient.html.twig', [
            'users' => $userRepository->findByRole("Client"),
        ]);
    }

    #[Route('/{id}/banS', name: 'app_user_ban_S', methods: ['GET','POST'])]
    public function Ban(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(true);
        $entityManager->flush();
        
        return $this->render('user/indexSupp.html.twig', [
            'users' => $repo->findByRole("Supplier"),
        ]);
    }
    #[Route('/{id}/unbanS', name: 'app_user_unban_S', methods: ['GET','POST'])]
    public function unBan(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(0);
        $entityManager->flush();
    
        
        return $this->render('user/indexSupp.html.twig', [
            'users' => $repo->findByRole("Supplier"),
        ]);
    }

    #[Route('/{id}/banD', name: 'app_user_ban_D', methods: ['GET','POST'])]
    public function BanD(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(true);
        $entityManager->flush();
        
        return $this->render('user/indexDriver.html.twig', [
            'users' => $repo->findByRole("Driver"),
        ]);
    }
    #[Route('/{id}/unbanD', name: 'app_user_unban_D', methods: ['GET','POST'])]
    public function unBanD(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(0);
        $entityManager->flush();
    
        
        return $this->render('user/indexDriver.html.twig', [
            'users' => $repo->findByRole("Driver"),
        ]);
    }
    
    #[Route('/{id}/banC', name: 'app_user_ban_C', methods: ['GET','POST'])]
    public function BanC(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(true);
        $entityManager->flush();
        
        return $this->render('user/indexClient.html.twig', [
            'users' => $repo->findByRole("Client"),
        ]);
    }
    #[Route('/{id}/unbanC', name: 'app_user_unban_C', methods: ['GET','POST'])]
    public function unBanC(Request $request,UserRepository $repo,User $user, SessionInterface $session,EntityManagerInterface $entityManager): Response
    {
        $user->setIsBanned(0);
        $entityManager->flush();
    
        
        return $this->render('user/indexClient.html.twig', [
            'users' => $repo->findByRole("Client"),
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
    #[Route('/profile/{id}', name: 'app_profile', methods: ['GET'])]
    public function showFront(User $utilisateur): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('user/profile.html.twig', [
            'user' => $utilisateur,
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
                    $this->getParameter('kernel.project_dir') . '/public',
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
        $user->setIsVerified($isv);
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
    #[Route('/{id}/editPassUser', name: 'app_pass_front', methods: ['GET', 'POST'])]
    public function editPassFront(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PassTypeFront::class);
        $form->handleRequest($request);
       

        return $this->renderForm('user/editPassFront.html.twig', [
            
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{id}/confirmRole', name: 'confirm_role', methods: ['GET', 'POST'])]
    public function ConfirmRole(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
      
        $form = $this->createForm(RoleType::class);
        $form->handleRequest($request);
       

        return $this->renderForm('user/RoleEdit.html.twig', [
            
            'user' => $user,
            'form' => $form,
        ]);

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
    #[Route('/{id}/AssignRole/DB', name: 'assign_role', methods: ['GET', 'POST'])]
    public function AssignRole(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher,EntityManagerInterface $entityManager): Response
    {
        $role=$request->request->get('role');
        $user->setRole($role);
        $entityManager->flush();
        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/editPassword/Front', name: 'edit_password_db_front', methods: ['GET', 'POST'])]
public function editPassDBFront(Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
{
    $oldPassword = $request->request->get('old-password');

    // Check if the old password matches the user's current password
    if (!$passwordEncoder->isPasswordValid($user, $oldPassword)) {
        // Old password doesn't match, return an error
        $this->addFlash('error', 'Old password is incorrect.');
        return $this->redirectToRoute('app_pass_front', ['id' => $user->getId()]);
    } else {
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $request->get('password')
            )
        );
        $entityManager->flush();

        return $this->redirectToRoute('thanks', ['id' => $user->getId()]);
        return $this->redirectToRoute('app_profile', ['id' => $user->getId()]);
    }
}
    #[Route('/{id}/editProfile', name: 'app_front_edit', methods: ['GET', 'POST'])]
    public function editProfile(Request $request, User $user, UserRepository $utilisateurRepository,EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();

            if ($uploadedFile) {
                // generate a unique file name
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public';
            
                // move the uploaded file to the target directory
                $uploadedFile->move(
                    $targetDirectory, // specify the target directory where the file should be saved
                    $newFileName      // specify the new file name
                );
                    
                            // set the image path to the path of the uploaded file
                            $user->setImagePath($newFileName);
                
            }
          
            $entityManager->flush();
            // Exemple dans votre contrôleur
             
            return $this->redirectToRoute('thanks', ['id' => $user->getId()]);

        }

        return $this->renderForm('user/editProfile.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
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
    #[Route('/thanks/{id}', name: 'thanks')]
    public function thanks(User $user): Response
    {
        return $this->render('user/thanks.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/thanksPass/{id}', name: 'thanks')]
    public function thanksResetPassword(User $user): Response
    {
        return $this->render('reset_password/thanks.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/thanks', name: 'thanks')]
    public function thanksEditPass(): Response
    {
        return $this->render('user/thanksEditPass.html.twig');
    }
    


       /**
     * @Route("/banned-users-chart", name="banned_users_chart")
     */
    public function bannedUsersChart(UserRepository $userRepository): JsonResponse
    {
        $bannedUsersCount = $userRepository->countBannedUsers();
        $activeUsersCount = $userRepository->countActiveUsers();

        $data = [
            'banned_users' => $bannedUsersCount,
            'active_users' => $activeUsersCount,
        ];

        return $this->json($data);
    }
}
