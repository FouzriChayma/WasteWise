<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id_st')]
    private ?int $idSt = null;

    #[ORM\Column(length: 255)]
    private ?string $name_st = null;
    
    #[ORM\Column(type: 'integer')]
    private ?int $quantity_st = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_d_ajout_st = null;

    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date_derniere_mise_a_jour_st = null;

    #[ORM\Column(length: 255)]
    private ?string $statut_st = null;

    #[ORM\ManyToOne(inversedBy: 'stocks')]
    #[ORM\JoinColumn(name: 'id_sh', referencedColumnName: 'id_sh', nullable: false)]
    private ?StoreHouse $storehouse = null;

    
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

    public function setDateDAjoutSt(\DateTimeInterface $date_d_ajout_st): static
    {
        $this->date_d_ajout_st = $date_d_ajout_st;

        return $this;
    }

    public function getDateDerniereMiseAJourSt(): ?\DateTimeInterface
    {
        return $this->date_derniere_mise_a_jour_st;
    }

    public function setDateDerniereMiseAJourSt(\DateTimeInterface $date_derniere_mise_a_jour_st): static
    {
        $this->date_derniere_mise_a_jour_st = $date_derniere_mise_a_jour_st;

        return $this;
    }

    public function getStatutSt(): ?string
    {
        return $this->statut_st;
    }

    public function setStatutSt(string $statut_st): static
    {
        $this->statut_st = $statut_st;

        return $this;
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

}