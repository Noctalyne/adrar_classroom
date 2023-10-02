<?php

namespace App\Controller;

use App\Entity\Cours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeCoursController extends AbstractController
{
    #[Route('/liste_cours', name: 'app_listeCours')]
    // public function index(): Response
    // {
    //     return $this->render('./adrar/cours.html.twig', [
    //         'controller_name' => 'ListeCoursController',
    //     ]);
    // }

    // public function generateCarte(CoursRepository $coursRepository) : Response
    // {
    //     $listeCours = $coursRepository->findAll();


    //     return $this->render('./adrar/cours.html.twig', [
    //         'titre' => $listeCours
    //     ]);
    // }

    public function generateTitre(Cours $cours, EntityManagerInterface $entity) : Response
    {
        $titre = $cours->getTitre();
        $listeCours = $entity->getRepository(Cours::class)->findBy($titre);


        // $titreCours = array();

        // // var_dump($listeCours);

        // foreach ($cours as $tc) {
        //     $titre = $cours->getTitre();
        //     array_push($titreCours, $titre );
        // }

        // var_dump($titreCours);

        return $this->render('./adrar/cours.html.twig', [
            'titre' => $titreCours,
            'cours' => $cours,
        ]);
    }

} // Cours $cours, int $niveauxCours ,EntityManagerInterface $entityManager
        // $niveauxCours = $cours->getNiveau();
        // $langage = $Cours[$niveauxCours];

        // foreach($langage as $ls) {

        // }
?>