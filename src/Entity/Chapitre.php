<?php

namespace App\Entity;

use App\Repository\ChapitreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChapitreRepository::class)]
#[ORM\Table(name: "chapitres")]
class Chapitre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 65535)]
    private ?string $contenu = null;

    #[ORM\Column]
    private ?int $position = null;

    #[ORM\ManyToOne(inversedBy: 'chapitres')]
    private ?Cours $cours = null;

    #[ORM\OneToMany(mappedBy: 'chapitre', targetEntity: UtilisateurChapitres::class)]
    private Collection $utilisateurChapitres;

    public function __construct()
    {
        $this->utilisateurChapitres = new ArrayCollection();
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
     * @return Collection<int, UtilisateurChapitres>
     */
    public function getUtilisateurChapitres(): Collection
    {
        return $this->utilisateurChapitres;
    }

    public function addUtilisateurChapitre(UtilisateurChapitres $utilisateurChapitre): static
    {
        if (!$this->utilisateurChapitres->contains($utilisateurChapitre)) {
            $this->utilisateurChapitres->add($utilisateurChapitre);
            $utilisateurChapitre->setChapitre($this);
        }

        return $this;
    }

    public function removeUtilisateurChapitre(UtilisateurChapitres $utilisateurChapitre): static
    {
        if ($this->utilisateurChapitres->removeElement($utilisateurChapitre)) {
            // set the owning side to null (unless already changed)
            if ($utilisateurChapitre->getChapitre() === $this) {
                $utilisateurChapitre->setChapitre(null);
            }
        }

        return $this;
    }
}