<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{   
    private $encoder;
    public function __construct(UserPasswordHasherInterface $encoder)
    {   
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('siba');
        $user->setSurname('nassima');
        $user->setSlug('nassima_siba');
        $user->setEmail('nassima.siba@gmail.com');
        $user->setPassword($this->encoder->hashPassword($user,'pass'));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $user->setIsVerified(true);
        $manager->persist($user);

        // on a crée un utilisateur
        $user = new User();
        $user->setName('Doucoure');
        $user->setSurname('Habibata');
        $user->setSlug('Habibata_Doucoure');
        $user->setEmail('habibata@Doucoure.com');
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->setRoles(['ROLE_USER']);
        $user->setIsVerified(true);
        $manager->persist($user);

        $manager->flush();
    }
}
