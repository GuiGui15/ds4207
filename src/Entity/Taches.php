<?php

namespace App\Entity;

use App\Repository\TachesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TachesRepository::class)
 */
class Taches
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="taches")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity=Priorite::class, inversedBy="taches")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Priorite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Decription;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getPriorite(): ?Priorite
    {
        return $this->Priorite;
    }

    public function setPriorite(?Priorite $Priorite): self
    {
        $this->Priorite = $Priorite;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->Decription;
    }

    public function setDecription(string $Decription): self
    {
        $this->Decription = $Decription;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
