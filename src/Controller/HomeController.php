<?php

namespace App\Controller;

use App\Repository\VideoRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(VideoRepository $videoRepository): Response
    {
        //On récupère juste 3 vidéos pour l'accueil
        $videos = $videoRepository->findBy([], ['updatedAt' => 'DESC'], 3);
         //On rend la page en lui passant la liste des videos
        return $this->render('home/index.html.twig', [
            'videos' => $videos,
        ]); 
    }
}
