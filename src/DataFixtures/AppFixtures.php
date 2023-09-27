<?php

// namespace App\DataFixtures;

// use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\Persistence\ObjectManager;
// use App\Entity\User;

// class AppFixtures extends Fixture
// {
//     public function load(ObjectManager $manager): void 
//     {
//         $this->createUser("azerty@adrar.com", [], "123456", "Azerty", $manager);
//         $this->createUser("admin@adrar.com", ["ROLE_ADMIN"], "123456789", "Admin", $manager);

//         $manager->flush(); 
//     }

//     public function createUser(string $sEmail, array $arrRoles, string $sPassword, string $suserName, ObjectManager $manager): User 
//     {
//         $counter = 1;
//         $user = new User();
//         $user->setEmail($sEmail);
//         $user->setRoles($arrRoles);
//         $user->setPassword(password_hash($sPassword, PASSWORD_BCRYPT));
//         $user->setUsername($suserName);

//         $manager->persist($user);

//         $this->setReference('user-' . $counter, $user);

//         return $user;
//     }

// }

namespace App\DataFixtures;

use App\Entity\Avis;
use Faker\Factory;
use App\Entity\Cours;
use App\Entity\Chapitres;
use App\Entity\Utilisateurs;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Lorem;

class AppFixtures extends Fixture
{
    private int $counter = 1;

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $cours = $this->createCours('Symfony', Lorem::$small, 3, 50, '', date('Y-m-d'), 1, $manager);

        $this->counter = 1;

        $this->createChapter('Installation', Lorem::$big, 0, $cours, $manager);
        $this->createChapter('Les bases', Lorem::$big, 1, $cours, $manager);
        $this->createChapter('Les contrôleurs', Lorem::$big, 2, $cours, $manager);
        // $this->createUtilisateurs("azerty@adrar.com", [], "123456", "Azerty", $manager);
        // $this->createUtilisateurs("admin@adrar.com", ["ROLE_ADMIN"], "123456789", "Admin", $manager);

        $azertyUser =$this->createUtilisateurs([], "123456", "Luc", "Azerty", "azerty@adrar.com", $manager);
        $adminUser = $this->createUtilisateurs(["ROLE_ADMIN"], "123456789", "Antho",  "Admin", "admin@adrar.com", $manager);


        for ($i = 0; $i < 10; $i++) {
            $avis = new Avis();
            $avis->setContenu($faker->paragraph);

            if ($i % 2 == 0) {
                $avis->setUser($azertyUser);
                $azertyUser->setImage('images/Avatar/Avatar.png');
            } else {
                $avis->setUser($adminUser);
                $adminUser->setImage('images/Avatar/Avatar2.png');
            }
            $manager->persist($avis);
        }

        $manager->flush();
    }

    public function createCours($titre, $synopsis, $niveau, $tempsEstime, $image, $date, $cree, $manager)
    {
        $cours = new Cours();
        $cours->setTitre($titre);
        $cours->setSynopsis($synopsis);
        $cours->setNiveau($niveau);
        $cours->setTempsEstime($tempsEstime);
        $cours->setImage($image);
        $cours->setDate($date);
        $cours->setCree($cree);

        $manager->persist($cours);

        $this->addReference('cours-' . $this->counter, $cours);

        $this->counter++;

        return $cours;
    }

    public function createChapter($titre, $contenu, $position, $cours, $manager)
    {
        $chapitre = new Chapitres();
        $chapitre->setTitre($titre);
        $chapitre->setContenu($contenu);
        $chapitre->setPosition($position);
        $chapitre->setCours($cours);

        $manager->persist($chapitre);

        $this->addReference('chapitre-' . $this->counter, $chapitre);

        $this->counter++;

        return $chapitre;
    }


    public function createUtilisateurs($arrRoles, $Password, $Nom, $Prenom, $Email,  ObjectManager $manager): Utilisateurs
    {
        $counter = 1;
        $user = new Utilisateurs();
        $user->setEmail($Email);
        $user->setRoles($arrRoles);
        $user->setPassword(password_hash($Password, PASSWORD_BCRYPT));
        $user->setNom($Nom);
        $user->setPrenom($Prenom);


        $manager->persist($user);

        $this->setReference('utilisateurs-' . $counter, $user);

        return $user;
    }
}
