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
    #[ORM\Column(name: "cours_id")]
    private ?int $id = null;

    #[ORM\Column(length: 255, name: "cours_titre")]
    private ?string $titre = null;

    #[ORM\Column(length: 255, name: "cours_synopsis")]
    private ?string $synopsis = null;

    #[ORM\Column(type: Types::SMALLINT, name: "cours_niveau")]
    private ?int $niveau = null;
    // private Collection $niveauxCours; // test pour recup les nivx

    #[ORM\Column(name: "cours_temps_estime")]
    private ?int $tempsEstime = null;

    #[ORM\Column(length: 255, name: "cours_image")]
    private ?string $image = null;

    #[ORM\Column(name: "cours_date")]
    private ?string $date = null;

    #[ORM\Column(type: Types::SMALLINT, name: "cours_cree")]
    private ?int $cree = null;

    #[ORM\OneToMany(mappedBy: 'cours', targetEntity: Chapitres::class)]
    private Collection $chapitres;

    public function __construct()
    {
        $this->chapitres = new ArrayCollection();
        // $this->niveauxCours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $title): static
    {
        $this->titre = $title;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): static
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    public function setNiveau(int $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getTempsEstime(): ?int
    {
        return $this->tempsEstime;
    }

    public function setTempsEstime(int $tempsEstime): static
    {
        $this->tempsEstime = $tempsEstime;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCree(): ?int
    {
        return $this->cree;
    }

    public function setCree(int $cree): static
    {
        $this->cree = $cree;

        return $this;
    }

    /**
     * @return Collection<int, Chapitres>
     */
    public function getChapitres(): Collection
    {
        return $this->chapitres;
    }

    public function addChapitre(Chapitres $chapitre): static
    {
        if (!$this->chapitres->contains($chapitre)) {
            $this->chapitres->add($chapitre);
            $chapitre->setCours($this);
            $this->sortChapitres();
        }

        return $this;
    }

    public function removeChapitre(Chapitres $chapitre): static
    {
        if ($this->chapitres->removeElement($chapitre)) {
            // set the owning side to null (unless already changed)
            if ($chapitre->getCours() === $this) {
                $chapitre->setCours(null);
            }

            $this->sortChapitres();
        }

        return $this;
    }

    public function sortChapitres() : static
    {
        usort($chapitres, function($c1, $c2)
        {
            return $c1->getPosition() < $c2->getPosition() ? -1 : 1;
        });

        return $this;
    }
}
