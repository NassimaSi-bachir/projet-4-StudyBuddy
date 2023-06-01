<?php

namespace App\DataFixtures;

use App\Entity\Video;
use App\DataFixtures\AuthorFixtures;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VideoFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $video = new Video();
        $video->setTitle('Education positive : pratiques');
        $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ");
        $video->setImageName('imageEnfant.jpeg');
        $video->setVideoName('education-positive-video.mp4');
        $video->setSlug('education-positive-video');
        $video->addCategory($this->getReference(CategoryFixtures::LANGUES));
        $video->addAuthor($this->getReference(AuthorFixtures::ISABELLE_FILLIOZAT));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Mathématiques : apprendre les divisions');
        $video->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ");
        $video->setImageName('rectangle.png');
        $video->setVideoName('mathematique-brissiaud.mp4');
        $video->setSlug('mathematique-video');
        $video->addCategory($this->getReference(CategoryFixtures::MATHEMATIQUES));
        $video->addAuthor($this->getReference(AuthorFixtures::REMI_BRISSIAUD));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Apprends à lire avec Titou');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('francais1.png');
        $video->setVideoName('sciences1.mp4');
        $video->setSlug('francais1');
        $video->addCategory($this->getReference(CategoryFixtures::FRANCAIS));
        $video->addAuthor($this->getReference(AuthorFixtures::ISABELLE_FILLIOZAT));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Les pays du monde');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('geographie1.png');
        $video->setVideoName('sciences4.mp4'); 
        $video->setSlug('geographie1');
        $video->addCategory($this->getReference(CategoryFixtures::GEOGRAPHIE));
        $video->addAuthor($this->getReference(AuthorFixtures::MANON_BRIL));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('La campagne et la ville');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('geographie2.png');
        $video->setVideoName('sport1.mp4');
        $video->setSlug('geographie2');
        $video->addCategory($this->getReference(CategoryFixtures::GEOGRAPHIE));
        $video->addAuthor($this->getReference(AuthorFixtures::MANON_BRIL));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Les monuments en Italie');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        // $video->setImageName('geographie3.png');
        $video->setVideoName('education-positive-video.mp4');
        $video->setSlug('geographie3');
        $video->addCategory($this->getReference(CategoryFixtures::GEOGRAPHIE));
        $video->addAuthor($this->getReference(AuthorFixtures::MANON_BRIL));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Sciences au quotidien');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sciences1.png');
        $video->setVideoName('sciences1.mp4');
        $video->setSlug('sciences1');
        $video->addCategory($this->getReference(CategoryFixtures::SCIENCES));
        $video->addAuthor($this->getReference(AuthorFixtures::JAMY));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Les étoiles et les planètes');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sciences2.png');
        $video->setVideoName('sciences4.mp4');
        $video->setSlug('sciences2');
        $video->addCategory($this->getReference(CategoryFixtures::SCIENCES));
        $video->addAuthor($this->getReference(AuthorFixtures::JAMY));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Le corps humain');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sciences3.png');
        $video->setVideoName('sciences5.mp4');
        $video->setSlug('sciences3');
        $video->addCategory($this->getReference(CategoryFixtures::SCIENCES));
        $video->addAuthor($this->getReference(AuthorFixtures::JAMY));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Les molécules');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sciences4.png');
        $video->setVideoName('sciences4.mp4');
        $video->setSlug('sciences4');
        $video->addCategory($this->getReference(CategoryFixtures::SCIENCES));
        $video->addAuthor($this->getReference(AuthorFixtures::JAMY));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Les fonds marins');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sciences5.png');
        $video->setVideoName('sciences5.mp4');
        $video->setSlug('sciences5');
        $video->addCategory($this->getReference(CategoryFixtures::SCIENCES));
        $video->addAuthor($this->getReference(AuthorFixtures::JAMY));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Bouge ton corps');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('sport1.png');
        $video->setVideoName('sport1.mp4');
        $video->setSlug('sport1');
        $video->addCategory($this->getReference(CategoryFixtures::SPORT));
        $video->addAuthor($this->getReference(AuthorFixtures::ISABELLE_FILLIOZAT));
        $manager->persist($video);

        $video = new Video();
        $video->setTitle('Deviens un vrai codeur');
        $video->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');
        $video->setImageName('technologie1.png');
        $video->setVideoName('mathematique-brissiaud.mp4');
        $video->setSlug('technologie1');
        $video->addCategory($this->getReference(CategoryFixtures::TECHNOLOGIE));
        $video->addAuthor($this->getReference(AuthorFixtures::REMI_BRISSIAUD));
        $manager->persist($video);

        $manager->flush(); 
    }
}
