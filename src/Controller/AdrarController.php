<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdrarController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('adrar/index.html.twig', [
            'controller_name' => 'AdrarController',
        ]);
    }
    
    #[Route('/NaN', name: 'app_nan')]
    public function nan(): Response
    {
        return $this->render('adrar/index.html.twig', [
            'controller_name' => 'NaN',
        ]);
    }
}