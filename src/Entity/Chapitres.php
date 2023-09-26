<?php

namespace App\Entity;

use App\Repository\ChapitresRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChapitresRepository::class)]
class Chapitres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "chapitre_id")]
    private ?int $id = null;

    #[ORM\Column(length: 255, name: "chapitre_titre")]
    private ?string $titre = null;

    #[ORM\Column(length: 65535, name: "chapitre_contenu")]
    private ?string $contenu = null;

    #[ORM\Column(name: "chapitre_position")]
    private ?int $position = null;

    #[ORM\ManyToOne(inversedBy: 'chapitres')]
    #[ORM\JoinColumn(name: "id_cours", referencedColumnName: "cours_id")]
    private ?Cours $cours = null;

    #[ORM\OneToMany(mappedBy: 'chapitres', targetEntity: UtilisateursChapitres::class)]
    #[ORM\JoinColumn(referencedColumnName: "utlisateur_chapitre_id")]
    private Collection $utilisateursChapitres;

    public function __construct()
    {
        $this->utilisateursChapitres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu() : ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu) : static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getPosition() : ?int
    {
        return $this->position;
    }

    public function setPosition(int $position) : static
    {
        $this->position = $position;

        return $this;
    }

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): static
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * @return Collection<int, UtilisateursChapitres>
     */
    public function getUtilisateurChapitres(): Collection
    {
        return $this->utilisateursChapitres;
    }

    public function addUtilisateurChapitre(UtilisateursChapitres $utilisateurChapitre): static
    {
        if (!$this->utilisateursChapitres->contains($utilisateurChapitre)) {
            $this->utilisateursChapitres->add($utilisateurChapitre);
            $utilisateurChapitre->setChapitres($this);
        }

        return $this;
    }

    public function removeUtilisateurChapitre(UtilisateursChapitres $utilisateurChapitre): static
    {
        if ($this->utilisateursChapitres->removeElement($utilisateurChapitre)) {
            // set the owning side to null (unless already changed)
            if ($utilisateurChapitre->getChapitres() === $this) {
                $utilisateurChapitre->setChapitres(null);
            }
        }

        return $this;
    }
}