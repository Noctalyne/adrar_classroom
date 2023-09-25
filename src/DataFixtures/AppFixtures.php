<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\Entity\Chapitre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Lorem;

class AppFixtures extends Fixture
{
    private int $counter = 1;

    public function load(ObjectManager $manager): void
    {
        $cours = $this->createCours('Symfony', Lorem::$small, 3, 50, '', date('Y-m-d'), 1, $manager);

        $this->counter = 1;

        $this->createChapter('Installation', Lorem::$big, 0, $cours, $manager);
        $this->createChapter('Les bases', Lorem::$big, 1, $cours, $manager);
        $this->createChapter('Les contrôleurs', Lorem::$big, 2, $cours, $manager);

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
        $chapitre = new Chapitre();
        $chapitre->setTitre($titre);
        $chapitre->setContenu($contenu);
        $chapitre->setPosition($position);
        $chapitre->setCours($cours);

        $manager->persist($chapitre);

        $this->addReference('chapitre-' . $this->counter, $chapitre);

        $this->counter++;

        return $chapitre;
    }
}
