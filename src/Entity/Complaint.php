<?php

namespace App\Entity;

use App\Repository\ComplaintRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ComplaintRepository::class)]
class Complaint
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Please provide a user ID.")]
    private ?int $user_id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please fill the title.")]
    #[Assert\Length(max: 255, maxMessage: "The title cannot be longer than {{ limit }} characters.")]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please provide a description.")]
    #[Assert\Length(max: 255, maxMessage: "The description cannot be longer than {{ limit }} characters.")]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please provide a location.")]
    #[Assert\Length(max: 255, maxMessage: "The location cannot be longer than {{ limit }} characters.")]
    private ?string $location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "Please provide a submission date.")]
    private ?\DateTimeInterface $submissionDate = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please provide a picture.")]
    #[Assert\Length(max: 255, maxMessage: "The picture information cannot be longer than {{ limit }} characters.")]
    private ?string $picture = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Please provide a status.")]
    #[Assert\Length(max: 255, maxMessage: "The status cannot be longer than {{ limit }} characters.")]
    private ?string $status = null;

    #[ORM\OneToOne(targetEntity: "App\Entity\Reponse", mappedBy: "complaint")]
    private $reponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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

    public function getSubmissionDate(): ?\DateTimeInterface
    {
        return $this->submissionDate;
    }

    public function setSubmissionDate(\DateTimeInterface $submissionDate): static
    {
        $this->submissionDate = $submissionDate;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(?Reponse $reponse): static
    {
        // unset the owning side of the relation if necessary
        if ($reponse === null && $this->reponse !== null) {
            $this->reponse->setComplaint(null);
        }

        // set the owning side of the relation if necessary
        if ($reponse !== null && $reponse->getComplaint() !== $this) {
            $reponse->setComplaint($this);
        }

        $this->reponse = $reponse;

        return $this;
    }
}
