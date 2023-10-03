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

#[Route('cours/')]
class CoursController extends AbstractController
{
    #[Route('/{cours}/{position}', name: 'app_cours_chapitre')]
    public function index(Cours $cours, int $position, Security $security, EntityManagerInterface $entityManager): Response
    {
        $chapitres = $cours->getChapitres();
        $chapitre = $chapitres[$position];

        $user = $security->getUser();
        $utilisateursChapitres = array();

        if($user != null && $user instanceof Utilisateurs)
        {
            foreach($chapitres as $c)
            {
                $utilisateurChapitre = $entityManager->getRepository(UtilisateursChapitres::class)->findByForeignKey($user, $c);

                if($utilisateurChapitre == null)
                {
                    var_dump("util chap");
                    
                    $utilisateurChapitre = new UtilisateursChapitres();
                    $utilisateurChapitre->setUtilisateur($user);
                    $utilisateurChapitre->setChapitre($c);
                    $utilisateurChapitre->setChapitreTermine(0);
                    
                    $entityManager->persist($utilisateurChapitre);
                    $entityManager->flush();
                }

                array_push($utilisateursChapitres, $utilisateurChapitre);
            }
        }

        return $this->render('cours/coursComplet.html.twig', [
            'cours' => $cours,
            'chapitre' => $chapitre,
            'utilisateursChapitres' => $utilisateursChapitres,
        ]);
    }

    #[Route('/{cours}/{position}/valider', name: 'valider_cours')]
    public function validerChapitre(Cours $cours, int $position, Security $security, EntityManagerInterface $entityManager): Response
    {
        $chapitres = $cours->getChapitres();

        $chapitre = $chapitres[$position];

        $user = $security->getUser();

        $utilisateurChapitre = null;

        if($user != null && $user instanceof Utilisateurs)
        {
            $utilisateurChapitre = $entityManager->getRepository(UtilisateursChapitres::class)->findByForeignKey( $user, $chapitre);
            
            if($utilisateurChapitre != null)
            {
                $utilisateurChapitre->setChapitreTermine(1);

                $entityManager->persist($utilisateurChapitre);
                $entityManager->flush();
            }
        }

        if($chapitre->getPosition() < $chapitres->count() - 1) $chapitre = $chapitres[$position + 1];

        return $this->redirectToRoute('app_cours_chapitre', [
            'cours' => (string) $cours->getId(),
            'position' => (string) $chapitre->getPosition(),
        ]);
    }
}