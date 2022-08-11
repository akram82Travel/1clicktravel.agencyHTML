<?php

namespace App\Entity;

use App\Repository\NewsletterRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
    /**
 * @ORM\Entity(repositoryClass=NewsletterRepository::class)
 */
  /**
 * @ORM\Entity
 * @UniqueEntity("Email")
 */


class Newsletter

{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
  

    /**
     * @ORM\Column(type="string", length=255 ,unique=true)
     * @Assert\Email
     */
    protected $email;

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
}
