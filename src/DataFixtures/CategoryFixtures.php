<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const EDUCATION_POSITIVE = 'education-positive';
    public const MATHEMATIQUES = 'mathematiques';

    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Education Positive');
        $category->setSlug('education-positive');
        $manager->persist($category);
        $this->addReference(self::EDUCATION_POSITIVE, $category);

        $category = new Category();
        $category->setName('Mathématiques');
        $category->setSlug('mathematiques');
        $manager->persist($category);
        $this->addReference(self::MATHEMATIQUES, $category);

        $manager->flush();
    }
}
