<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/administration', name: 'app_administration')]
    public function index(): Response
    {
        return $this->render('./adrar/admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
?>