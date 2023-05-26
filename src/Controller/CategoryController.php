<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(CategoryRepository $categoryRepository): Response
    {
        //On récupère tous les videos
        $categorys = $categoryRepository->findAll();
         //On rend la page en lui passant la liste des videos
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'categorys'=>$categorys,
        ]);
    }
}
