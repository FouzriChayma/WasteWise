<?php

namespace App\Entity;

use App\Repository\StoreHouseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StoreHouseRepository::class)]
class StoreHouse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_sh")]
    private ?int $idSh = null;

    #[ORM\Column(length: 255)]
    private ?string $nameSh = null;

    #[ORM\Column(length: 255)]
    private ?string $locationSh = null;

    #[ORM\Column(type: 'integer')]
    private ?int $capacitySh = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $dateCreatedSh = null;

    #[ORM\Column(length: 255)]
    private ?string $statusSh = null;

    #[ORM\OneToMany(targetEntity: Stock::class, mappedBy: 'storehouse',cascade: ['remove'])]
    private Collection $stocks;

    public function __construct()
    {
        $this->stocks = new ArrayCollection();
    }


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

    public function getCapacitySh(): ?int
    {
        return $this->capacitySh;
    }

    public function setCapacitySh(?int $capacitySh): self
    {
        $this->capacitySh = $capacitySh;

        return $this;
    }

    public function getDateCreatedSh(): ?\DateTimeInterface
    {
        return $this->dateCreatedSh;
    }

    public function setDateCreatedSh(?\DateTimeInterface $dateCreatedSh): self
    {
        $this->dateCreatedSh = $dateCreatedSh;

        return $this;
    }

    public function getStatusSh(): ?string
    {
        return $this->statusSh;
    }

    public function setStatusSh(?string $statusSh): self
    {
        $this->statusSh = $statusSh;

        return $this;
    }

    /**
     * @return Collection<int, Stock>
     */
    public function getStocks(): Collection
    {
        return $this->stocks;
    }

    public function addStock(Stock $stock): static
    {
        if (!$this->stocks->contains($stock)) {
            $this->stocks->add($stock);
            $stock->setStorehouse($this);
        }

        return $this;
    }

    public function removeStock(Stock $stock): static
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
