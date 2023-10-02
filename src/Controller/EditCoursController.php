<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cours/edit')]
#[IsGranted('ROLE_ADMIN')]
class EditCoursController extends AbstractController
{
    #[Route('/list', name: 'app_edit_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository): Response
    {   
        return $this->render('edit_cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_edit_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cour);
            $entityManager->flush();

            return $this->redirectToRoute('app_edit_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('edit_cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'app_edit_cours_show', methods: ['GET'])]
    public function show(Cours $cour): Response
    {
        return $this->render('edit_cours/show.html.twig', [
            'cour' => $cour,
        ]);
    }

    #[Route('/{id}', name: 'app_edit_cours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_edit_cours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('edit_cours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_edit_cours_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_edit_cours_index', [], Response::HTTP_SEE_OTHER);
    }
}
