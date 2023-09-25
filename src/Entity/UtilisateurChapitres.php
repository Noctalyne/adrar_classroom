<?php

namespace App\Entity;

use App\Repository\UtilisateurChapitresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurChapitresRepository::class)]
class UtilisateurChapitres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurChapitres')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurChapitres')]
    private ?Chapitre $chapitre = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $chapitreTermine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getChapitre(): ?Chapitre
    {
        return $this->chapitre;
    }

    public function setChapitre(?Chapitre $chapitre): static
    {
        $this->chapitre = $chapitre;

        return $this;
    }

    public function getChapitreTermine(): ?int
    {
        return $this->chapitreTermine;
    }

    public function setChapitreTermine(int $chapitreTermine): static
    {
        $this->chapitreTermine = $chapitreTermine;

        return $this;
    }
}
