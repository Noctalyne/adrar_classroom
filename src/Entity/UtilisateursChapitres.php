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
    #[ORM\Column(name:"utilisateur_chapitre_id", type:"integer")]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $utilisateur_chapitre_date_inscription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $utilisateur_chapitre_termine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurChapitreDateInscription(): ?\DateTimeInterface
    {
        return $this->utilisateur_chapitre_date_inscription;
    }

    public function setUtilisateurChapitreDateInscription(\DateTimeInterface $utilisateur_chapitre_date_inscription): static
    {
        $this->utilisateur_chapitre_date_inscription = $utilisateur_chapitre_date_inscription;

        return $this;
    }

    public function getUtilisateurChapitreTermine(): ?int
    {
        return $this->utilisateur_chapitre_termine;
    }

    public function setUtilisateurChapitreTermine(int $utilisateur_chapitre_termine): static
    {
        $this->utilisateur_chapitre_termine = $utilisateur_chapitre_termine;

        return $this;
    }
}
