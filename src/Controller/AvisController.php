<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Avis;

class AvisController extends AbstractController
{
    #[Route('/avis', name: 'app_avis')]
    public function generateAvis(): Response
    {
        // Récupérer les avis depuis la base de données
        $avisRepository = $this->getDoctrine()->getRepository(Avis::class);
        $avis = $avisRepository->findAll(); // Vous pouvez utiliser une requête plus spécifique ici

        // Choisissez un avis aléatoire (par exemple, le premier avis dans cet exemple)
        $avisContenu = $avis[7]->getAvisContenu();

        return $this->render('index.html.twig', [
            'avisContenu' => $avisContenu,
        ]);
    }
}
