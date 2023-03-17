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

    // fonction  pour afficher tous les utilisateur
    #[Route('all_rapport', name: 'dashboard_user_rapport', methods: ["GET"]) ]
        public function dashboard_user(): jsonResponse
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
        // $user = $this->userRepo->findOneById($request_data["user_id"]);$
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


    #[Route('rapport/edit/{id}', name: 'rapports_update', methods: ["DELETE", "POST","GET"])]

        public function edit(Request $request, RapportRepository $repoRapport): Response
        {
            $form = $this->createForm(ProjectType::class, $repoRapport);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
    
                return $this->redirectToRoute('project_index', [], Response::HTTP_SEE_OTHER);
            }
            return $this->renderForm('project/edit.html.twig', [
                'project' => $repoRapport,
                'form' => $form,
            ]);
        }
     ///fonction pour une suppression 
     #[Route('rapport/delete/{id}', name: 'rapports_delete', methods: ["DELETE", "POST","GET"])]
     public function deleteRapport($id): Response
     {
         $monRapport = $this->repoRapport->findOneById($id);
         $this->repoRapport->remove($monRapport, true);
        return $this->redirectToRoute('dashboard_user', [], Response::HTTP_SEE_OTHER);
     }
}
