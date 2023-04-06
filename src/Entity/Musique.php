<?php

namespace App\Entity;

use App\Repository\MusiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MusiqueRepository::class)]
class Musique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomMusique = null;

    #[ORM\ManyToOne(inversedBy: 'musiques')]
    private ?Album $album = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMusique(): ?string
    {
        return $this->nomMusique;
    }

    public function setNomMusique(string $nomMusique): self
    {
        $this->nomMusique = $nomMusique;

        return $this;
    }

    public function getAlbum(): ?Album
    {
        return $this->album;
    }

    public function setAlbum(?Album $album): self
    {
        $this->album = $album;

        return $this;
    }

    public function __toString()
{
    return $this->nomMusique;
}

}
