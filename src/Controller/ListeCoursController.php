<?php

namespace App\Controller;

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
}
// ?>