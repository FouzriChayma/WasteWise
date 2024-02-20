<?php

namespace App\Entity;

use App\Repository\StoreHouseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Enum\LocationEnum;



#[ORM\Entity(repositoryClass: StoreHouseRepository::class)]
#[UniqueEntity(fields: ['nameSh'], message: 'This name is already taken')]

class StoreHouse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_sh')]
    private ?int $idSh = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Please enter the storehouse name')]
    private ?string $nameSh = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: 'Please enter the storehouse location')]
    private ?string $locationSh = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: 'Please enter the storehouse capacity')]
    #[Assert\Type(type: 'integer', message: 'The capacity should be a valid integer')]
    private ?int $capacity = null;

    #[ORM\Column(type: 'integer')]
    private ?int $quantitySum = 0;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isFull = false;

    #[ORM\OneToMany(targetEntity: Stock::class, mappedBy: 'storehouse', cascade: ['remove'])]
    private Collection $stocks;

    public function __construct()
    {
        $this->stocks = new ArrayCollection();
    }

    // Getters and setters

    public function getIdSh(): ?int
    {
        return $this->idSh;
    }

    public function getNameSh(): ?string
    {
        return $this->nameSh;
    }

    public function setNameSh(?string $nameSh): self
    {
        $this->nameSh = $nameSh;

        return $this;
    }

    public function getLocationSh(): ?string
    {
        return $this->locationSh;
    }

    public function setLocationSh(?string $locationSh): self
    {
        $this->locationSh = $locationSh;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(?int $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getQuantitySum(): ?int
    {
        $sum = 0;
        foreach ($this->stocks as $stock) {
            $sum += $stock->getQuantitySt();
        }
        return $sum;
    }

    public function getIsFull(): ?bool
    {
        return $this->getQuantitySum() >= $this->capacity;
    }

    public function __toString(): string
    {
        return $this->nameSh; // Assuming `nameSh` is the property you want to use to represent the StoreHouse as a string
    }
    /**
     * @return Collection|Stock[]
     */
    public function getStocks(): Collection
    {
        return $this->stocks;
    }

    public function addStock(Stock $stock): self
    {
        if (!$this->stocks->contains($stock)) {
            $this->stocks[] = $stock;
            $stock->setStorehouse($this);
        }

        return $this;
    }

    public function removeStock(Stock $stock): self
    {
        if ($this->stocks->removeElement($stock)) {
            // set the owning side to null (unless already changed)
            if ($stock->getStorehouse() === $this) {
                $stock->setStorehouse(null);
            }
        }

        return $this;
    }

}
