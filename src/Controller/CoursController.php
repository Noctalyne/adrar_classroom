<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Utilisateurs;
use App\Entity\UtilisateursChapitres;
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

    #[Route('/{cours}/{position}', name: 'app_cours')]
    public function index(Cours $cours, int $position, EntityManagerInterface $entityManager): Response
    {
        $chapitre = $cours->getChapitres()[$position];

        $user = $this->security->getUser();

        $utilisateurChapitre = null;

        if($user != null && $user instanceof Utilisateurs)
        {
            $utilisateurChapitre = $entityManager->getRepository(UtilisateursChapitres::class)->findByForeignKey($user, $chapitre);

            if($utilisateurChapitre == null)
            {
                $utilisateurChapitre = new UtilisateursChapitres();
                $utilisateurChapitre->setUtilisateur($user);
                $utilisateurChapitre->setChapitre($chapitre);
                
                $entityManager->persist($utilisateurChapitre);
                $entityManager->flush();
            }
        }

        return $this->render('cours/index.html.twig', [
            'cours' => $cours,
            'chapitre' => $chapitre,
            'utilisateurChapitre' => $utilisateurChapitre,
        ]);
    }

    #[Route('/{cours}/{position}/valider', name: 'valider_cours')]
    public function validerChapitre(Cours $cours, int $position, EntityManagerInterface $entityManager): Response
    {
        $chapitres = $cours->getChapitres();

        $chapitre = $chapitres[$position];

        $user = $this->security->getUser();

        $utilisateurChapitre = null;

        if($user != null && gettype($user) == Utilisateurs::class)
        {
            $utilisateurChapitre = $entityManager->getRepository(UtilisateursChapitres::class)->findByForeignKey($chapitre, $user);
            
            if($utilisateurChapitre == null)
            {
                $utilisateurChapitre->setChapitreTermine(1);

                $entityManager->flush();
            }
        }

        if($chapitre->getPosition() < $chapitres->count() - 1) $chapitre = $chapitres[$position + 1];

        return $this->redirectToRoute('app_cours', [
            'cours' => (string) $cours->getId(),
            'position' => (string) $chapitre->getPosition(),
        ]);
    }
}
