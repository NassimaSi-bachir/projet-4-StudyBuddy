<?php

namespace App\Controller;

use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    #[Route('/video', name: 'app_video')]
    public function index(VideoRepository $videoRepository ): Response
    {
        //On récupère tous les videos
        $videos = $videoRepository->findAll();
         //On rend la page en lui passant la liste des videos
        return $this->render('video/index.html.twig', [
            'controller_name' => 'VideoController',
            'videos' => $videos,
        ]);
    }
}
