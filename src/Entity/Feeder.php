<?php

namespace App\Entity;

use App\Repository\FeederRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FeederRepository::class)
 */
class Feeder
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $User;

    /**
     * @ORM\Column(type="text")
     */
    private $details;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->User;
    }

    public function setUser(string $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(string $details): self
    {
        $this->details = $details;

        return $this;
    }
}
