<?php

namespace App\Controller;

use App\Entity\Chapitres;
use App\Form\ChapitresType;
use App\Repository\ChapitresRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/chapitres/edit')]
#[IsGranted('ROLE_ADMIN')]
class ChapitresEditController extends AbstractController
{
    #[Route('/list', name: 'app_chapitres_edit_index', methods: ['GET'])]
    public function index(ChapitresRepository $chapitresRepository): Response
    {
        return $this->render('chapitres_edit/index.html.twig', [
            'chapitres' => $chapitresRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_chapitres_edit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $chapitre = new Chapitres();
        $form = $this->createForm(ChapitresType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chapitre);
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitres_edit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitres_edit/new.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'app_chapitres_edit_show', methods: ['GET'])]
    public function show(Chapitres $chapitre): Response
    {
        return $this->render('chapitres_edit/show.html.twig', [
            'chapitre' => $chapitre,
        ]);
    }

    #[Route('/{id}', name: 'app_chapitres_edit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chapitres $chapitre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChapitresType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitres_edit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitres_edit/edit.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_chapitres_edit_delete', methods: ['POST'])]
    public function delete(Request $request, Chapitres $chapitre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chapitre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chapitres_edit_index', [], Response::HTTP_SEE_OTHER);
    }
}
