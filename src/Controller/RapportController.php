<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Repository\RapportRepository;
use App\Repository\UtilisateurRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;
// use Symfony\Bundle\SecurityBundle\Security;


class RapportController extends AbstractController
{

    private $userRepo;
    // private $passwordHasher;
    private $repoRapport;
    private $serializer;
    private $security;
    // private $repoCat;
    public function __construct(Security $security, UtilisateurRepository $userRepo, RapportRepository $repoRapport, SerializerInterface $serializer) {
        $this->repoRapport = $repoRapport;
        $this->serializer = $serializer;
        $this->userRepo = $userRepo;
        $this->security = $security;
    }

    // fonction  pour pour afficher le dashboard
        #[Route('/admin', name: 'app_project')]
            public function index(): Response
            {
                return $this->render('admin/index.html.twig', [
                    'controller_name' => 'UtilisateurController',
                ]);
            }

   // fonction  pour afficher tous les rapport des utilisateurs
    #[Route('all_rapport_admin', name: 'dashboard_user_rapport', methods: ["GET"]) ]
        public function dashboard_user(): jsonResponse
        {
            {
                $rapports = $this->repoRapport->findAll();
                return $this->json([
                    "code" => 200,
                    "data" => $rapports
                ], 200, [], ['groups' => ['show_product']]
                );
            }
        }

            // // fonction  pour afficher tous les rapports cotés admin
            #[Route('all_rapport_admins', name: 'dashboard_user_rapports', methods: ["GET"]) ]
            public function dashboard_user_rapport(): Response
            {
                    return $this->render('admin/rapport/index.html.twig', [
                    'rapports' => $this->repoRapport->findAll(),
                ]);
            }

             // // fonction  pour imprimer un rapport
             #[Route('all_rapport_admin_show/{id}', name: 'dashboard_user_rapports_show', methods: ["GET"]) ]
             public function dashboard_user_rapport_print($id): Response
             {
                     return $this->render('admin/rapport/show.html.twig', [
                     'rapports_print' => $this->repoRapport->find($id),
                 ]);
             }
 

        // fonction  pour afficher tous les utilisateur
    #[Route('recent/rapport', name: 'rapport_rapport_user', methods: ["GET"]) ]
    public function recent_rapport(): jsonResponse
    {
        {
            $cats = $this->repoRapport->findAll();            
            return $this->json([
                "code" => 200,
                "data" => $cats
            ], 200, [], ['groups' => ['show_product']]
            );
        }
    }

    // fonction  pour afficher un seul rapport
    #[Route('find/rapport/{id}', name: 'find_user_rapport', methods: ["GET"]) ]
    public function findRapport($id): jsonResponse
    {
        {
            $cats = $this->repoRapport->find($id);
            return $this->json([
                "code" => 200,
                "data" => $cats
            ], 200, [], ['groups' => ['show_product']]
            );
        }
    }

// fonction  pour insertion de données dans la db
    #[Route('api/rapport/add', name: 'create_rapport', methods: ["POST"])]
    public function insertUser(Request $request): JsonResponse
    {

        $user = $this->security->getUser();
        // dd($this->security->getUser()->getLastname());

        // get data request
        $request_data = json_decode($request->getContent(), true);
        $rapport = new Rapport();
        $rapport->setTexteRapport($request_data["texte_rapport"]);
        $rapport->setTitreRapport($request_data["titre_rapport"]);
        $user = $this->security->getUser();
        $rapport->setRapportDate(new \DateTime($request_data["rapport_date"]));
        $rapport->setUtilisateur($user);
        // $rapport->setUtilisateur($this->getUser());
        $this->repoRapport->save($rapport, true);
        // return $this->json($user->data())
        return $this->json([
            'code' => 200 ,
            'message' => 'Emreg Ok'
        ]);   
    }


    #[Route('api/rapport/edit/{id}', name: 'rapports_update', methods: ["PUT"])]

        public function edit($id, Request $request): jsonResponse
        {
            // get user current
            $rapport = $this->repoRapport->findOneById($id);
        // get data request
        $request_data = json_decode($request->getContent(), true);
        $rapport->setTexteRapport($request_data["texte_rapport"]);
        $rapport->setTitreRapport($request_data["titre_rapport"]);
        $rapport->setRapportDate(new \DateTime($request_data["rapport_date"]));
        $user = $this->security->getUser();
        $rapport->setUtilisateur($user);
        $this->repoRapport->save($rapport, true);
        return $this->json([
                'code' => 200,
                'data' => $rapport
            ], 200, [], ['groups' => 'show_user']
        );
        }
     ///fonction pour une suppression 
     #[Route('rapport/delete/{id}', name: 'rapports_delete', methods: ["DELETE","GET"])]
     public function deleteRapport($id): jsonResponse
     {
         $monRapport = $this->repoRapport->findOneById($id);
         $this->repoRapport->remove($monRapport, true);
         return $this->json([
            'code' => 200,
            'data' => "rapport supprimer avec succès"
        ], 200, [], ['groups' => 'show_user']
        );
        // return $this->redirectToRoute('dashboard_user', [], Response::HTTP_SEE_OTHER);
     }


     #[Route('rapport/delete/admin/{id}', name: 'rapports_delete_admin', methods: ["DELETE","GET"])]
     public function deleteRapportAdmin($id):Response
     {
         $monRapport = $this->repoRapport->findOneById($id);
         $this->repoRapport->remove($monRapport, true);
        return $this->redirectToRoute('dashboard_user_rapports', [], Response::HTTP_SEE_OTHER);
     }
}
