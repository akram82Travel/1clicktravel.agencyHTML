<?php

namespace App\Entity;

use App\Repository\BilleterieLigneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BilleterieLigneRepository::class)
 */
class BilleterieLigne
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
    private $type_voyageur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pernom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_de_naissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $nPassport;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeVoyageur(): ?string
    {
        return $this->type_voyageur;
    }

    public function setTypeVoyageur(string $type_voyageur): self
    {
        $this->type_voyageur = $type_voyageur;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPernom(): ?string
    {
        return $this->pernom;
    }

    public function setPernom(string $pernom): self
    {
        $this->pernom = $pernom;

        return $this;
    }

    public function getDateDeNaissance(): ?string
    {
        return $this->date_de_naissance;
    }

    public function setDateDeNaissance(string $date_de_naissance): self
    {
        $this->date_de_naissance = $date_de_naissance;

        return $this;
    }

    public function getNPassport(): ?int
    {
        return $this->nPassport;
    }

    public function setNPassport(int $nPassport): self
    {
        $this->nPassport = $nPassport;

        return $this;
    }
}
