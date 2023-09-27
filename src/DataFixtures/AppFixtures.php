<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Avis;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

 
        $azertyUser = $this->createUser("azerty@adrar.com", [], "123456", "Azerty", $manager);
        $adminUser = $this->createUser("admin@adrar.com", ["ROLE_ADMIN"], "123456789", "Admin", $manager);

        for ($i = 0; $i < 10; $i++) { 
            $avis = new Avis();
            $avis->setAvisContenu($faker->paragraph); 

            if ($i % 2 == 0) {
                $avis->setUser($azertyUser);
                $azertyUser->setAvatar('images/Avatar/Avatar.png'); 
            } else {
                $avis->setUser($adminUser);
                $adminUser->setAvatar('images/Avatar/Avatar2.png'); 
            }

            $manager->persist($avis);
        }

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