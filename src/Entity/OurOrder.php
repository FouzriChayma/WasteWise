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
    private $createdAt;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'id_user',referencedColumnName:'id')]
    private ?User $id_user = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Please enter the location")]
    #[Assert\Length(max: 255, maxMessage: "The location should not exceed {{ limit }} characters")]
    private $locationO;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Please enter the email")]
    #[Assert\Email(message: "The email '{{ value }}' is not a valid email address.")]
    private $emailU;

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

    public function getLocationO(): ?string
    {
        return $this->locationO;
    }

    public function setLocationO(?string $locationO): self
    {
        $this->locationO = $locationO;

        return $this;
    }

    public function getEmailU(): ?string
    {
        return $this->emailU;
    }

    public function setEmailU(?string $emailU): self
    {
        $this->emailU = $emailU;

        return $this;
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

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $iduser): self
    {
        $this->id_user = $iduser;

        return $this;
    }
}
