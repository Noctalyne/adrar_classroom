<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeCoursController extends AbstractController
{
    #[Route('/cours', name: 'app_cours')]
    public function index(): Response
    {
        return $this->render('./adrar/cours.html.twig', [
            'controller_name' => 'ListeCoursController',
        ]);
    }
}
// ?>