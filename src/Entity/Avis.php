<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $avis_id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $avis_contenu = null;

    #[ORM\Column]
    private ?int $id_utilisateur = null;

    public function getId(): ?int
    {
        return $this->avis_id;
    }

    public function getAvisContenu(): ?string
    {
        return $this->avis_contenu;
    }

    public function setAvisContenu(string $avis_contenu): static
    {
        $this->avis_contenu = $avis_contenu;

        return $this;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->id_utilisateur;
    }

    public function setIdUtilisateur(int $id_utilisateur): static
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }
}
