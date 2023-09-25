<?php

namespace App\Entity;

use App\Repository\ChapitresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChapitresRepository::class)]
class Chapitres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"chapitre_id", type:"integer")]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $chapitre_titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $chapitre_contenu = null;

    #[ORM\Column]
    private ?int $chapitre_position = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChapitreTitre(): ?string
    {
        return $this->chapitre_titre;
    }

    public function setChapitreTitre(string $chapitre_titre): static
    {
        $this->chapitre_titre = $chapitre_titre;

        return $this;
    }

    public function getChapitreContenu(): ?string
    {
        return $this->chapitre_contenu;
    }

    public function setChapitreContenu(string $chapitre_contenu): static
    {
        $this->chapitre_contenu = $chapitre_contenu;

        return $this;
    }

    public function getChapitrePosition(): ?int
    {
        return $this->chapitre_position;
    }

    public function setChapitrePosition(int $chapitre_position): static
    {
        $this->chapitre_position = $chapitre_position;

        return $this;
    }


}
