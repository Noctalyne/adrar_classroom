<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
#[UniqueEntity(fields: ['prenom'], message: 'There is already an account with this prenom')]
class Utilisateurs implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "utilisateur_id")]
    private ?int $id = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(name: "utilisateur_mot_de_passe")]
    private ?string $motDePasse = null;

    #[ORM\Column(length: 255, name: "utilisateur_nom", nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, name: "utilisateur_prenom", nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, name: "utilisateur_email")]
    private ?string $email = null;

    #[ORM\Column(length: 255, name: "utilisateur_image", nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: 'utilisateurs', targetEntity: UtilisateursChapitres::class)]
    private Collection $utilisateursChapitres;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Avis::class)]
    private Collection $avis;

    public function __construct()
    {
        $this->utilisateursChapitres = new ArrayCollection();
        $this->avis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->prenom;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->motDePasse;
    }

    public function setPassword(string $password): static
    {
        $this->motDePasse = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

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

    /**
     * @return Collection<int, UtilisateursChapitres>
     */
    public function getUtilisateursChapitres(): Collection
    {
        return $this->utilisateursChapitres;
    }

    public function addUtilisateurChapitre(UtilisateursChapitres $utilisateurChapitre): static
    {
        if (!$this->utilisateursChapitres->contains($utilisateurChapitre)) {
            $this->utilisateursChapitres->add($utilisateurChapitre);
            $utilisateurChapitre->setUtilisateur($this);
        }

        return $this;
    }

    public function removeUtilisateurChapitre(UtilisateursChapitres $utilisateurChapitre): static
    {
        if ($this->utilisateursChapitres->removeElement($utilisateurChapitre)) {
            // set the owning side to null (unless already changed)
            if ($utilisateurChapitre->getUtilisateur() === $this) {
                $utilisateurChapitre->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): static
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setUser($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getUser() === $this) {
                $avi->setUser(null);
            }
        }

        return $this;
    }
}
