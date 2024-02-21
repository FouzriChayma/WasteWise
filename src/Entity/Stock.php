<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File; // if using File
use Symfony\Component\HttpFoundation\File\UploadedFile; // if using UploadedFile
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: StockRepository::class)]
#[UniqueEntity(fields: ['name_st'], message: 'This name is already taken')]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id_st')]
    private ?int $idSt = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Please enter the stock name')]
    #[Assert\Length(max: 255, maxMessage: 'The stock name should be at most {{ limit }} characters')]
    private ?string $name_st = null;
    
    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: 'Please enter the quantity')]
    #[Assert\Type(type: 'integer', message: 'The quantity should be a valid integer')]
    private ?int $quantity_st = null;

    #[ORM\Column(nullable: false)]
    #[Assert\NotBlank(message: 'Please upload an image')]
    private ?string $image_st = null;

    #[ORM\Column(type:"datetime")]
    private $date_d_ajout_st;
    
    #[ORM\OneToMany(targetEntity: OurOrder::class, mappedBy: 'stock', cascade: ['remove'])]
    private Collection $ourOrders;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 3, nullable: true)]
    #[Assert\NotBlank(message: 'Please enter the buying price')]
    #[Assert\Type(type: 'numeric', message: 'The buying price should be a valid number')]
    private ?float $buying_price = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 3, nullable: true)]
    #[Assert\NotBlank(message: 'Please enter the selling price')]
    #[Assert\Type(type: 'numeric', message: 'The selling price should be a valid number')]
    private ?float $selling_price = null;
    

    #[ORM\ManyToOne(inversedBy: 'stocks')]
    #[ORM\JoinColumn(name: 'id_sh', referencedColumnName: 'id_sh', nullable: false)]
    private ?StoreHouse $storehouse = null;

    public function __construct()
    {
        // Set the default value for date_d_ajout_st to the current date and time
        $this->setDefaultDate();
        $this->ourOrders = new ArrayCollection();

    }

    
    public function setDefaultDate(): void
    {
        // Set the date_d_ajout_st to the current date and time
        $this->date_d_ajout_st = new \DateTime();
    }
    
    public function getIdSt(): ?int
    {
        return $this->idSt;
    }

    public function getNameSt(): ?string
    {
        return $this->name_st;
    }

    public function setNameSt(string $name_st): static
    {
        $this->name_st = $name_st;

        return $this;
    }

     public function getImageSt(): ?string
    {
        return $this->image_st;
    }

    public function setImageSt(?string $image_st): static
    {
        $this->image_st = $image_st;

        return $this;
    }


    public function getQuantitySt(): ?int
    {
        return $this->quantity_st;
    }

    public function setQuantitySt(int $quantity_st): static
    {
        $this->quantity_st = $quantity_st;

        return $this;
    }


    public function getDateDAjoutSt(): ?\DateTimeInterface
    {
        return $this->date_d_ajout_st;
    }


    public function getStorehouse(): ?StoreHouse
    {
        return $this->storehouse;
    }

    public function setStorehouse(?StoreHouse $storehouse): static
    {
        $this->storehouse = $storehouse;

        return $this;
    }

    public function getBuyingPrice(): ?float
    {
        return $this->buying_price;
    }

    public function setBuyingPrice(?float $buying_price): static
    {
        $this->buying_price = $buying_price;

        return $this;
    }
    public function getSellingPrice(): ?float
    {
        return $this->selling_price;
    }

    public function setSellingPrice(?float $selling_price): static
    {
        $this->selling_price = $selling_price;

        return $this;
    }


    public function getOurOrders(): Collection
    {
        return $this->ourOrders;
    }

    public function addOurOrder(OurOrder $ourOrder): self
    {
        if (!$this->ourOrders->contains($ourOrder)) {
            $this->ourOrders[] = $ourOrder;
            $ourOrder->setStock($this);
        }

        return $this;
    }

    public function removeOurOrder(OurOrder $ourOrder): self
    {
        if ($this->ourOrders->removeElement($ourOrder)) {
            // set the owning side to null (unless already changed)
            if ($ourOrder->getStock() === $this) {
                $ourOrder->setStock(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->name_st;
    }
    

}