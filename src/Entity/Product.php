<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=TypeContactFiliales::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeContact(): ?TypeContactFiliales
    {
        return $this->typeContact;
    }

    public function setTypeContact(?TypeContactFiliales $typeContact): self
    {
        $this->typeContact = $typeContact;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }
}
