<?php

namespace App\Controller;

use App\Entity\View;
use App\Form\ViewType;
use App\Repository\ViewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/view')]
class AdminViewController extends AbstractController
{
    #[Route('/', name: 'app_admin_view_index', methods: ['GET'])]
    public function index(ViewRepository $viewRepository): Response
    {
        return $this->render('admin_view/index.html.twig', [
            'views' => $viewRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_view_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ViewRepository $viewRepository): Response
    {
        $view = new View();
        $form = $this->createForm(ViewType::class, $view);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $viewRepository->save($view, true);

            return $this->redirectToRoute('app_admin_view_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_view/new.html.twig', [
            'view' => $view,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_view_show', methods: ['GET'])]
    public function show(View $view): Response
    {
        return $this->render('admin_view/show.html.twig', [
            'view' => $view,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_view_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, View $view, ViewRepository $viewRepository): Response
    {
        $form = $this->createForm(ViewType::class, $view);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $viewRepository->save($view, true);

            return $this->redirectToRoute('app_admin_view_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_view/edit.html.twig', [
            'view' => $view,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_view_delete', methods: ['POST'])]
    public function delete(Request $request, View $view, ViewRepository $viewRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$view->getId(), $request->request->get('_token'))) {
            $viewRepository->remove($view, true);
        }

        return $this->redirectToRoute('app_admin_view_index', [], Response::HTTP_SEE_OTHER);
    }
}
