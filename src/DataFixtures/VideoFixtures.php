<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VideoFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $video = new Video();
        $video->setTitle('isabelle-vidéo');
        $video->setDescription("Un Groupe De Jeunes Dans La Discussion D'un Projet De Groupe");
        $video->setImageName('groupe-positive');
        $video->setVideoName('education-positive-video.mp4');
        $video->setSlug('education-positive-video');
        $video->addCategory($this->getReference(CategoryFixtures::EDUCATION_POSITIVE));
        $video->addAuthor($this->getReference(AuthorFixtures::ISABELLE_FILLIOZAT));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('brissiaud-vidéo');
        $video->setDescription("Un élève Résolvant Une équation Mathématique Sur Le Tableau Noir");
        $video->setImageName('eleve-mathematique');
        $video->setVideoName('mathematique-brissiaud.mp4');
        $video->setSlug('mathematique-video');
        $video->addCategory($this->getReference(CategoryFixtures::MATHEMATIQUES));
        $video->addAuthor($this->getReference(AuthorFixtures::REMI_BRISSIAUD));
        $manager->persist($video);

        $manager->flush();
    }
}