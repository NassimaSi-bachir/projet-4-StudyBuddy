<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const ARTS = 'arts';
    public const FRANCAIS = 'francais';
    public const GEOGRAPHIE = 'geographie';
    public const HISTOIRE = 'histoire';
    public const LANGUES = 'langues';
    public const MATHEMATIQUES = 'mathematiques';
    public const MUSIQUE = 'musique';
    public const SCIENCES = 'sciences';
    public const SPORT = 'sport';
    public const TECHNOLOGIE = 'technologie';

    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Arts');
        $category->setSlug('arts');
        $category->setImageName('arts.png');
        $manager->persist($category);
        $this->addReference(self::ARTS, $category);

        $category = new Category();
        $category->setName('Français');
        $category->setSlug('francais');
        $category->setImageName('francais.png');
        $manager->persist($category);
        $this->addReference(self::FRANCAIS, $category);

        $category = new Category();
        $category->setName('Géographie');
        $category->setSlug('geographie');
        $category->setImageName('geographie.png');
        $manager->persist($category);
        $this->addReference(self::GEOGRAPHIE, $category);

        $category = new Category();
        $category->setName('Histoire');
        $category->setSlug('histoire');
        $category->setImageName('histoire.png');
        $manager->persist($category);
        $this->addReference(self::HISTOIRE, $category);

        $category = new Category();
        $category->setName('Langues vivantes');
        $category->setSlug('langues-vivantes');
        $category->setImageName('langues.png');
        $manager->persist($category);
        $this->addReference(self::LANGUES, $category);

        $category = new Category();
        $category->setName('Mathématiques');
        $category->setSlug('mathematiques');
        $category->setImageName('maths.png');
        $manager->persist($category);
        $this->addReference(self::MATHEMATIQUES, $category);

        $category = new Category();
        $category->setName('Musique');
        $category->setSlug('musique');
        $category->setImageName('musique.png');
        $manager->persist($category);
        $this->addReference(self::MUSIQUE, $category);

        $category = new Category();
        $category->setName('Sciences');
        $category->setSlug('sciences');
        $category->setImageName('sciences.png');
        $manager->persist($category);
        $this->addReference(self::SCIENCES, $category);

        $category = new Category();
        $category->setName('Sport');
        $category->setSlug('sport');
        $category->setImageName('sport.png');
        $manager->persist($category);
        $this->addReference(self::SPORT, $category);

        $category = new Category();
        $category->setName('Technologie');
        $category->setSlug('technologie');
        $category->setImageName('techno.png');
        $manager->persist($category);
        $this->addReference(self::TECHNOLOGIE, $category);

        $manager->flush();
    }
}
