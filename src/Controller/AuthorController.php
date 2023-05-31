<?php

namespace App\Controller;

use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(AuthorRepository $authorRepository): Response
    {
        // //On récupère tous les authors
        // $authors = $authorRepository->findAll();
        //  //On rend la page en lui passant la liste des videos
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
            // 'authors' => $authors,
        ]);
    }
}
