<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"cours_id", type:"integer")]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $cours_titre = null;

    #[ORM\Column(length: 100)]
    private ?string $cours_synopsis = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $cours_niveau = null;

    #[ORM\Column]
    private ?int $cours_temps_estime = null;

    #[ORM\Column(length: 100)]
    private ?string $cours_image = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $cours_date = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $cours_cree = null;





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoursTitre(): ?string
    {
        return $this->cours_titre;
    }

    public function setCoursTitre(string $cours_titre): static
    {
        $this->cours_titre = $cours_titre;

        return $this;
    }

    public function getCoursSynopsis(): ?string
    {
        return $this->cours_synopsis;
    }

    public function setCoursSynopsis(string $cours_synopsis): static
    {
        $this->cours_synopsis = $cours_synopsis;

        return $this;
    }

    public function getCoursNiveau(): ?int
    {
        return $this->cours_niveau;
    }

    public function setCoursNiveau(int $cours_niveau): static
    {
        $this->cours_niveau = $cours_niveau;

        return $this;
    }

    public function getCoursTempsEstime(): ?int
    {
        return $this->cours_temps_estime;
    }

    public function setCoursTempsEstime(int $cours_temps_estime): static
    {
        $this->cours_temps_estime = $cours_temps_estime;

        return $this;
    }

    public function getCoursImage(): ?string
    {
        return $this->cours_image;
    }

    public function setCoursImage(string $cours_image): static
    {
        $this->cours_image = $cours_image;

        return $this;
    }

    public function getCoursDate(): ?\DateTimeInterface
    {
        return $this->cours_date;
    }

    public function setCoursDate(\DateTimeInterface $cours_date): static
    {
        $this->cours_date = $cours_date;

        return $this;
    }

    public function getCoursCree(): ?int
    {
        return $this->cours_cree;
    }

    public function setCoursCree(int $cours_cree): static
    {
        $this->cours_cree = $cours_cree;

        return $this;
    }

}
