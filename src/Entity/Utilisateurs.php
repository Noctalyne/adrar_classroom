<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
class Utilisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"utilisateur_id", type:"integer")]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $utilisateur_nom = null;

    #[ORM\Column(length: 50)]
    private ?string $utilisateur_prenom = null;

    #[ORM\Column(length: 100)]
    private ?string $utilisateur_email = null;

    #[ORM\Column(length: 255)]
    private ?string $utilisateur_mot_de_passe = null;

    #[ORM\Column(length: 255)]
    private ?string $utilisateur_image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurNom(): ?string
    {
        return $this->utilisateur_nom;
    }

    public function setUtilisateurNom(string $utilisateur_nom): static
    {
        $this->utilisateur_nom = $utilisateur_nom;

        return $this;
    }

    public function getUtilisateurPrenom(): ?string
    {
        return $this->utilisateur_prenom;
    }

    public function setUtilisateurPrenom(string $utilisateur_prenom): static
    {
        $this->utilisateur_prenom = $utilisateur_prenom;

        return $this;
    }

    public function getUtilisateurEmail(): ?string
    {
        return $this->utilisateur_email;
    }

    public function setUtilisateurEmail(string $utilisateur_email): static
    {
        $this->utilisateur_email = $utilisateur_email;

        return $this;
    }

    public function getUtilisateurMotDePasse(): ?string
    {
        return $this->utilisateur_mot_de_passe;
    }

    public function setUtilisateurMotDePasse(string $utilisateur_mot_de_passe): static
    {
        $this->utilisateur_mot_de_passe = $utilisateur_mot_de_passe;

        return $this;
    }

    public function getUtilisateurImage(): ?string
    {
        return $this->utilisateur_image;
    }

    public function setUtilisateurImage(string $utilisateur_image): static
    {
        $this->utilisateur_image = $utilisateur_image;

        return $this;
    }
}
