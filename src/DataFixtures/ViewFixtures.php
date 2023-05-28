<?php

namespace App\DataFixtures;

use App\Entity\View;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ViewFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $view = new View();
        $view->setState('vu');
        $view->setSlug('video-vu');
        // $view->setViewDate();
        $manager->persist($view);

        $manager->flush();
    }
}
