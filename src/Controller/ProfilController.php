<?php

namespace App\Controller;

use App\Form\UserType;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    public function index(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $encoder): Response
    {
         // On recupere l'utilisateur
        $user = $this->getUser();
         // On crée un formulaire avec les données de l'utilisateur
        $form = $this->createForm(UserType::class, $user);
         // 
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
        if(!is_null($request->get('plainPassword'))){
        $password = $encoder->hashPassword($user,$request->request->get('plainPassword'));
        $user->setPassword($password);
        }
        $this->addFlash('success', 'Votre profil a bien été modifié.');
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('app_home'); 
        }
        return $this->render('profil/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    #[Route('/add-favori/{id}', name:'add_favori' )]
    public function addFavori($id, VideoRepository $videoRepository, EntityManagerInterface $em, Request $request):Response
    {
        // On récupère la video dans la BDD
    $video = $videoRepository->find($id);
    // On récupère l'utilisateur
    $user = $this ->getUser();
    // On ajoute la video a la liste des favoris de l'utilisateur
    $user->addVideo($video);
    $this->addFlash('success',' La vidéo a bien été ajoutée aux favoris.');
    //On enregistre les modification 
    $em->persist($user);
    $em->flush();
    //On redirige vers la page vidéo
    return $this->redirect($request->headers->get('referer'));


    }

    #[Route('/remove-video/{id}', name:'remove_video' )]
    public function removeVideo($id, VideoRepository $videoRepository, EntityManagerInterface $em, Request $request):Response
    {
        // On récupère la video dans la BDD
    $video = $videoRepository->find($id);
    // On récupère l'utilisateur
    $user = $this ->getUser();
    // On ajoute la video a la liste des favoris de l'utilisateur
    $user->removeVideo($video);
    $this->addFlash('success',' La vidéo a bien été supprimée des favoris.');
    //On enregistre les modification 
    $em->persist($user);
    $em->flush();
    //On redirige vers la page vidéo
    return $this->redirect($request->headers->get('referer'));


    }
}
