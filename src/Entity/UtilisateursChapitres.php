<?php

namespace App\Entity;

use App\Repository\UtilisateursChapitresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateursChapitresRepository::class)]
class UtilisateursChapitres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "utilisateur_chapitre_id")]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs_chapitres')]
    #[ORM\JoinColumn(referencedColumnName: 'utilisateur_id')]
    private ?Utilisateurs $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs_chapitres')]
    #[ORM\JoinColumn(referencedColumnName: 'chapitre_id')]
    private ?Chapitres $chapitre = null;

    #[ORM\Column(type: Types::SMALLINT, name: "utilisateur_chapitre_termine")]
    private ?int $termine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getChapitre(): ?Chapitres
    {
        return $this->chapitre;
    }

    public function setChapitre(?Chapitres $chapitre): static
    {
        $this->chapitre = $chapitre;

        return $this;
    }

    public function getChapitreTermine(): ?int
    {
        return $this->termine;
    }

    public function setChapitreTermine(int $chapitreTermine): static
    {
        $this->termine = $chapitreTermine;

        return $this;
    }
}
