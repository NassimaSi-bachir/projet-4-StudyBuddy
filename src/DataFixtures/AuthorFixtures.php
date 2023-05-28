<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public const ISABELLE_FILLIOZAT = 'isabelle-filliozat';
    public const REMI_BRISSIAUD = 'remi-brissiaud';
    public function load(ObjectManager $manager): void
    {
        $author = new Author();
        $author->setName('Isabelle');
        $author->setSurname('Filliozat');
        $author->setBiography("Isabelle Filliozat est la fille du psychologue Rémy Filliozat, cofondateur
         de l’Institut français d’analyse transactionnelle1 et d'Anne-Marie Filliozat-Cosson, psychologue 
         et psychanalyste1,2 qui a travaillé à l'hôpital Necker auprès d'enfants atteints de mucoviscidose3. 
         Ses parents ont développé en 1980 le stage de formation « Je dis non à la maladie, 
         je dis oui à ses messages » et créé la formation de conseiller en santé holistique2.");
        $author->setSlug('isabelle-filliozat');
        $author->setImageName('isabelle-filliozat.jpg');
        $manager->persist($author);
        $this->addReference(self::ISABELLE_FILLIOZAT, $author);

        $author = new Author();
        $author->setName('Remi');
        $author->setSurname('Brissiaud');
        $author->setBiography("Après une maîtrise de mathématiques obtenue en 1972 à l’université Paris-VII, 
        il commence sa carrière professionnelle comme professeur certifié de mathématiques au lycée technique 
        d'État Jean-Jaurès à Argenteuil. En 1976, il est nommé professeur de mathématiques à l’École normale 
        d'instituteurs du Val-d’Oise qui devient ultérieurement un centre rattaché à l'IUFM de Versailles.");
        $author->setSlug('remi-brissiaud');
        $author->setImageName('remi-brissiaud.jpg');
        $manager->persist($author);
        $this->addReference(self::REMI_BRISSIAUD, $author);

        $manager->flush();
    }
}
