<?php

namespace App\Controller;

use App\Repository\ViewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'app_view')]
    public function index(ViewRepository $viewRepository): Response
    {
        //On récupère tous les videos
        $views = $viewRepository->findAll();
         //On rend la page en lui passant la liste des videos
        return $this->render('view/index.html.twig', [
            'controller_name' => 'ViewController',
            'views'=>$views,
        ]);
    }
}
