<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\AssociationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: AssociationRepository::class)]

class Association
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_association = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Name is required")]
    
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Your  name must be at least {{ limit }} characters long',
        maxMessage: 'Your  name cannot be longer than {{ limit }} characters',
    )]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"adresse is required")]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"email is required")]
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    private ?string $email = null;

    #[ORM\OneToMany(targetEntity: Donation::class, mappedBy: 'association')]
    private Collection $donations;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Image is required")]
    private ?string $ImagePath = null;

    public function __construct()
    {
        $this->donations = new ArrayCollection();
    }

    public function getId_association(): ?int
    {
        return $this->id_association;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

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

    /**
     * @return Collection<int, Donation>
     */
    public function getDonations(): Collection
    {
        return $this->donations;
    }

    public function addDonation(Donation $donation): static
    {
        if (!$this->donations->contains($donation)) {
            $this->donations->add($donation);
            $donation->setAssociation($this);
        }

        return $this;
    }

    public function removeDonation(Donation $donation): static
    {
        if ($this->donations->removeElement($donation)) {
            // set the owning side to null (unless already changed)
            if ($donation->getAssociation() === $this) {
                $donation->setAssociation(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getImagePath(): ?string
    {
        return $this->ImagePath;
    }

    public function setImagePath(string $ImagePath): static
    {
        $this->ImagePath = $ImagePath;

        return $this;
    }

}
