<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeCoursController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('./adrar/cours.html.twig', [
            'controller_name' => 'ListeCoursController',
        ]);
    }

    #[Route('/liste_cours', name: 'app_listeCours')]
    public function generateCarte(CoursRepository $coursRepository) : Response
    {
        $listeCours = $coursRepository->findAll();


        return $this->render('./adrar/cours.html.twig', [
            'listeCours' => $listeCours
        ]);
    }
    
    // public function generateTitre(EntityManagerInterface $entity) : Response
    // {

    //     $coursListe = $entity->getRepository(Cours::class)->findAll();


    //     return $this->render('./adrar/cours.html.twig', [
    //         //'titre' =>$listeTitre,
    //         'cours' => $cours,
    //     ]);
    // }

} 

?>