<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{
    public const ISABELLE_FILLIOZAT = 'isabelle-filliozat';
    public const REMI_BRISSIAUD = 'remi-brissiaud';
    public const MANON_BRIL = 'manon-bril';
    public const JAMY = 'jamy';
    public function load(ObjectManager $manager): void
    {
        $author = new Author();
        $author->setName('Filliozat');
        $author->setSurname('Isabelle');
        $author->setBiography("Isabelle Filliozat est la fille du psychologue Rémy Filliozat, cofondateur de l'Institut français d'analyse transactionnelle1 et d'Anne-Marie Filliozat-Cosson, psychologue et psychanalyste, qui a travaillé à l'hôpital Necker auprès d'enfants atteints de mucoviscidose. Ses parents ont développé en 1980 le stage de formation « Je dis non à la maladie, je dis oui à ses messages » et créé la formation de conseiller en santé holistique.");
        $author->setSlug('isabelle-filliozat');
        $author->setImageName('isabelle-filliozat.jpg');
        $manager->persist($author);
        $this->addReference(self::ISABELLE_FILLIOZAT, $author);

        $author = new Author();
        $author->setName('Brissiaud');
        $author->setSurname('Rémi');
        $author->setBiography("Après une maîtrise de mathématiques obtenue en 1972 à l'université Paris-VII, il commence sa carrière professionnelle comme professeur certifié de mathématiques au lycée technique d'État Jean-Jaurès à Argenteuil. En 1976, il est nommé professeur de mathématiques à l'École normale d'instituteurs du Val-d’Oise qui devient ultérieurement un centre rattaché à l'IUFM de Versailles.");
        $author->setSlug('remi-brissiaud');
        $author->setImageName('remi-brissiaud.png');
        $manager->persist($author);
        $this->addReference(self::REMI_BRISSIAUD, $author);

        $author = new Author();
        $author->setName('Bril');
        $author->setSurname('Manon');
        $author->setBiography("Manon Bril, de son vrai nom Manon Champier, née le 8 juin 1987 à Pau, est une historienne et vidéaste web française. Elle est connue pour être la créatrice de la chaîne YouTube « C'est une autre histoire », sur laquelle elle parle d'histoire, de mythologie, d'iconographie et d'art.");
        $author->setSlug('manon-bril');
        $author->setImageName('manonbril.png');
        $manager->persist($author);
        $this->addReference(self::MANON_BRIL, $author);

        $author = new Author();
        $author->setName('Gourmaud');
        $author->setSurname('Jamy');
        $author->setBiography("Jamy Gourmaud, ou simplement Jamy, né le 17 janvier 1964 à Fontenay-le-Comte (Vendée), est un journaliste, animateur de télévision et vulgarisateur français. Il est surtout connu pour avoir animé l'émission de vulgarisation scientifique « C'est pas sorcier ».");
        $author->setSlug('jamy-gourmaud');
        $author->setImageName('jamy.png');
        $manager->persist($author);
        $this->addReference(self::JAMY, $author);

        $manager->flush();
    }
}
