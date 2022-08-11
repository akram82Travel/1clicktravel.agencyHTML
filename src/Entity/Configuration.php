<?php

namespace App\Entity;

use App\Repository\ConfigurationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConfigurationRepository::class)
 */
class Configuration
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
    private $email;

    /**
     * @ORM\Column(type="text")
     */
    private $about;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_phone;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_fax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

        return $this;
    }

    public function getNbPhone(): ?int
    {
        return $this->nb_phone;
    }

    public function setNbPhone(int $nb_phone): self
    {
        $this->nb_phone = $nb_phone;

        return $this;
    }

    public function getNbFax(): ?int
    {
        return $this->nb_fax;
    }

    public function setNbFax(int $nb_fax): self
    {
        $this->nb_fax = $nb_fax;

        return $this;
    }
}
