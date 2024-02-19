<?php

namespace App\Entity;

use App\Repository\TruckRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TruckRepository::class)]

class Truck
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Id truck is required")]
    private ?string $id_truck = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Matricule is required")]
    /*#[Assert\Unique(message:"unique")]*/
    private ?string $matricule = null;

    #[ORM\Column(length: 255)]
    private ?string $disponibilite = null;

    #[ORM\OneToMany(targetEntity: Waste::class, mappedBy: 'truck')]
    private Collection $waste;

    public function __construct()
    {
        $this->waste = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTruck(): ?string
    {
        return $this->id_truck;
    }

    public function setIdTruck(string $id_truck): static
    {
        $this->id_truck = $id_truck;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * @return Collection<int, Waste>
     */
    public function getWaste(): Collection
    {
        return $this->waste;
    }

    public function addWaste(Waste $waste): static
    {
        if (!$this->waste->contains($waste)) {
            $this->waste->add($waste);
            $waste->setTruck($this);
        }

        return $this;
    }

    public function removeWaste(Waste $waste): static
    {
        if ($this->waste->removeElement($waste)) {
            // set the owning side to null (unless already changed)
            if ($waste->getTruck() === $this) {
                $waste->setTruck(null);
            }
        }

        return $this;
    }
}
