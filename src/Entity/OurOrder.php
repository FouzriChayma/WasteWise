<?php

namespace App\Entity;

use App\Repository\OurOrderRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OurOrderRepository::class)]
class OurOrder
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(name: 'idO', type: 'integer', options: ['unsigned' => true])]
    private $idO;

    #[ORM\ManyToOne(targetEntity: Stock::class, inversedBy: 'orders')]
    #[ORM\JoinColumn(name: 'id_st', referencedColumnName: 'id_st', nullable: false)]
    private $stock;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Please enter the quantity")]
    #[Assert\Type(type: "integer", message: "The quantity should be a valid integer")]
    #[Assert\LessThanOrEqual(propertyPath: "stock.quantity_st", message: "The quantity ordered cannot exceed the available stock quantity")]
    private $quantityO;

    #[ORM\Column(type: "string", length: 255, nullable: true)] // Make sure nullable is true
    private $statusO;

    #[ORM\Column(type: "float", nullable: true)]
    private $totalO;

    #[ORM\Column(type: "datetime")]
    private $createdAt; // Add this line


    public function __construct()
    {
        // Set the default status to "Pending" when creating a new OurOrder
        $this->statusO = 'Pending';
        $this->createdAt = new \DateTime(); // Set the default value for createdAt

    }

    public function getIdO(): ?int
    {
        return $this->idO;
    }

    public function getStock(): ?Stock
    {
        return $this->stock;
    }
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setStock(?Stock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getQuantityO(): ?int
    {
        return $this->quantityO;
    }

    public function setQuantityO(int $quantityO): self
    {
        $this->quantityO = $quantityO;
        return $this;
    }

    public function getStatusO(): ?string
    {
        return $this->statusO;
    }

    public function setStatusO(string $statusO): self
    {
        $this->statusO = $statusO;

        return $this;
    }

    public function getTotalO(): ?float
    {
        if ($this->stock !== null && $this->quantityO !== null && $this->stock->getSellingPrice() !== null) {
            $this->totalO = $this->quantityO * $this->stock->getSellingPrice();
        }
        return $this->totalO;
    }
}

