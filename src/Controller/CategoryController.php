<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\VideoRepository;
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

    #[Route('/category/{slug}', name:'app_category_show' )]
    public function showCategory($slug, CategoryRepository $categoryRepository, VideoRepository $videoRepository):Response
    {
       //On récupère la catégorie correspondant au slug
        $category = $categoryRepository->findOneBy(['slug' => $slug]);
        //On récupère les vidéos de la catégorie
        $videos = $videoRepository->findBy(['category'=> $category]);
       //On rend la page en lui passant les vidéos correspondantes
        return $this->render('category/show.html.twig', [
        'category' => $category,
        'videos' => $videos,
        ]);  
    }
}
