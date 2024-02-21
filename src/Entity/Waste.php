<?php

namespace App\Entity;

use App\Repository\WasteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Truck;
#[ORM\Entity(repositoryClass: WasteRepository::class)]
class Waste
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[Assert\NotBlank(message:"type is required")]
    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[Assert\NotBlank(message:"Location is required")]
    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[Assert\NotBlank(message:"etat is required")]
    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[Assert\NotBlank(message:"quantite is required")]
    #[ORM\Column(length: 255)]
    private ?string $quantite = null;

    #[ORM\ManyToOne(inversedBy: 'wastes')]
    private ?Truck $truck = null;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    

    
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(string $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

   
    /*public function __toString()
    {
        return $this->$truck;
    }*/

    public function getTruck(): ?Truck
    {
        return $this->truck;
    }

    public function setTruck(?Truck $truck): static
    {
        $this->truck = $truck;

        return $this;
    }
}
