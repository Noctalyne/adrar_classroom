<?php

namespace App\Controller;

use App\Entity\Chapitre;
use App\Entity\Utilisateur;
use App\Entity\UtilisateurChapitres;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    #[Route('/cours/{chapitre}', name: 'app_cours')]
    public function index(Chapitre $chapitre, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
        $utilisateurChapitre = null;

        if($user != null && gettype($user) == Utilisateur::class)
        {
            $utilisateurChapitre = $entityManager->getRepository(UtilisateurChapitres::class)->findByForeignKey($chapitre, $user);
        }

        return $this->render('cours/index.html.twig', [
            'chapitre' => $chapitre,
            'utilisateurChapitres' => $utilisateurChapitre,
        ]);
    }
}
