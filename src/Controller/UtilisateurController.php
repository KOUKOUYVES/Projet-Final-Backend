<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UtilisateurController extends AbstractController
{


        
    private $userRepo;
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher, UtilisateurRepository $userRepo) {
        $this->passwordHasher = $passwordHasher;
        $this->userRepo = $userRepo;
    }

            #[Route('/logout', name: 'logout', methods: ["GET"]) ]
            public function logout()
            {
                return $this->redirectToRoute('dashboard_user', [], Response::HTTP_SEE_OTHER);
                // throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
            }

    // fonction  pour pour afficher le dashboard
        #[Route('/admin', name: 'app_project')]
            public function index(): Response
            {
                return $this->render('admin/index.html.twig', [
                    'controller_name' => 'UtilisateurController',
                ]);
            }

    // fonction  pour afficher tous les utilisateur
    #[Route('/dashboard_users', name: 'dashboard_user', methods: ["GET"]) ]
        public function dashboard_user(): Response
        {
            return $this->render('admin/user/index.html.twig', [
                'projects' => $this->userRepo->findAll(),
            ]);
        }


// fonction  pour insertion de données dans la db
    #[Route('user/add', name: 'app_utilisateur', methods: ["POST"])]
    public function insertUser(Request $request): JsonResponse
    {
        // get data request
        $request_data = json_decode($request->getContent(), true);
        $user = new Utilisateur();
        // check if username exist
        $verifUsername = $this->userRepo->findOneByUsername($request_data["username"]);
        if ($verifUsername != null) {
            return $this->json([
                'code' => 401,
                'message' => "Ce username d'utilisateur est déjà utilisé."
            ]);
        }
        $user->setUsername($request_data["username"]);
        // hash the password (based on the security.yaml config for the $user class)
        $hashedPassword = $this->passwordHasher->hashPassword($user, $request_data["password"]);
        $user->setPassword($hashedPassword);
        $user->setFirstname($request_data["firstname"]);
        $user->setLastname($request_data["lastname"]);
        $user->setContact($request_data["contact"]);
        $user->setEmail($request_data["email"]);
        // save user
        $this->userRepo->save($user, true);
        return $this->json($user->data());
    }

     ///fonction pour une suppression 
     #[Route('user/delete/{id}', name: 'app_utilisateur_delete', methods: ["DELETE", "POST","GET"])]
     public function deleteUser($id): Response
     {
         $monUser = $this->userRepo->findOneById($id);
         $this->userRepo->remove($monUser, true);
        return $this->redirectToRoute('dashboard_user', [], Response::HTTP_SEE_OTHER);
     }

}
