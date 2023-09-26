<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void 
    {
        $this->createUser("azerty@adrar.com", [], "123456", "Azerty", $manager);
        $this->createUser("admin@adrar.com", ["ROLE_ADMIN"], "123456789", "Admin", $manager);

        $manager->flush(); 
    }

    public function createUser(string $sEmail, array $arrRoles, string $sPassword, string $suserName, ObjectManager $manager): User 
    {
        $counter = 1;
        $user = new User();
        $user->setEmail($sEmail);
        $user->setRoles($arrRoles);
        $user->setPassword(password_hash($sPassword, PASSWORD_BCRYPT));
        $user->setUsername($suserName);
       
        $manager->persist($user);
    
        $this->setReference('user-' . $counter, $user);

        return $user;
    }
    
}