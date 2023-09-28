<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeCoursController extends AbstractController
{
    #[Route('/liste_cours', name: 'app_listeCours')]
    public function index(): Response
    {
        return $this->render('./adrar/cours.html.twig', [
            'controller_name' => 'ListeCoursController',
        ]);
    }

    public function generateCarte(CoursRepository $coursRepository) : Response
    {
        $listeCours = $coursRepository->findAll();


        return $this->render('./adrar/cours.html.twig', [
            'titre' => $listeCours
        ]);
    }



} // Cours $cours, int $niveauxCours ,EntityManagerInterface $entityManager
        // $niveauxCours = $cours->getNiveau();
        // $langage = $Cours[$niveauxCours];

        // foreach($langage as $ls) {

        // }
// ?>