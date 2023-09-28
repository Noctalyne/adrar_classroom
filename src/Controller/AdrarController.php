<?php

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdrarController extends AbstractController
{
    // #[Route('/', name: 'app_adrar')]
    // public function index(): Response
    // {
    //     return $this->render('./adrar/index.html.twig', [
    //         'controller_name' => 'AdrarController',
    //     ]);
    // }

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('adrar/index.html.twig', [
            'controller_name' => 'AdrarController',
        ]);
    }

    // public function generateAvis(): Response
    // {
    //     $avisRepository = $this->getDoctrine()->getRepository(Avis::class);
    //     $avis = $avisRepository->findAll();

    //     return $this->render('adrar/index.html.twig', [
    //         'controller_name' => 'index',
    //         'avis' => $avis, 
    //     ]);
    // }

    
    #[Route('/', name: 'app_nan')]
    public function nan(): Response
    {
        return $this->render('adrar/index.html.twig', [
            'controller_name' => 'NaN',
        ]);
    }
}
