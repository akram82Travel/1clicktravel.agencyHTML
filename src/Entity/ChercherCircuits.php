<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ChercherCircuitsRepository;

/**
 * @ORM\Entity(repositoryClass=ChercherCircuitsRepository::class)
 */
class ChercherCircuits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Destination;

    /**
     * @ORM\Column(type="date")
     */
    private $Check_In;

    /**
     * @ORM\Column(type="date")
     */
    private $Check_Out;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getCheckIn(): ?\DateTimeInterface
    {
        return $this->Check_In;
    }

    public function setCheckIn(\DateTimeInterface $Check_In): self
    {
        $this->Check_In = $Check_In;

        return $this;
    }

    public function getCheckOut(): ?\DateTimeInterface
    {
        return $this->Check_Out;
    }

    public function setCheckOut(\DateTimeInterface $Check_Out): self
    {
        $this->Check_Out = $Check_Out;

        return $this;
    }
}
