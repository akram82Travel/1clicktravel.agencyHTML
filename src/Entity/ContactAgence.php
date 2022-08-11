<?php

namespace App\Entity;

use App\Repository\ContactAgenceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactAgenceRepository::class)
 */
class ContactAgence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_filiale;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_type_contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFiliale(): ?int
    {
        return $this->id_filiale;
    }

    public function setIdFiliale(int $id_filiale): self
    {
        $this->id_filiale = $id_filiale;

        return $this;
    }

    public function getIdTypeContact(): ?int
    {
        return $this->id_type_contact;
    }

    public function setIdTypeContact(int $id_type_contact): self
    {
        $this->id_type_contact = $id_type_contact;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
