<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\{CascadeType, OneToMany};

#[ORM\Entity(repositoryClass: AlbumRepository::class)]
class Album
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAlbum = null;

    #[ORM\ManyToOne(inversedBy: 'albums')]
    private ?Artiste $artiste = null;

    #[ORM\OneToMany(mappedBy: 'album', targetEntity: Musique::class, cascade: ['persist'])]
    private Collection $musiques;

    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'albums')]
    private Collection $genres;

    public function __construct()
    {
        $this->musiques = new ArrayCollection();
        $this->genres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAlbum(): ?string
    {
        return $this->nomAlbum;
    }

    public function setNomAlbum(string $nomAlbum): self
    {
        $this->nomAlbum = $nomAlbum;

        return $this;
    }

    public function getArtiste(): ?Artiste
    {
        return $this->artiste;
    }

    public function setArtiste(?Artiste $artiste): self
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * @return Collection<int, Musique>
     */
    public function getMusiques(): Collection
    {
        return $this->musiques;
    }

    public function addMusique(Musique $musique): self
    {
        if (!$this->musiques->contains($musique)) {
            $this->musiques->add($musique);
            $musique->setAlbum($this);
        }

        return $this;
    }

    public function removeMusique(Musique $musique): self
    {
        if ($this->musiques->removeElement($musique)) {
            // set the owning side to null (unless already changed)
            if ($musique->getAlbum() === $this) {
                $musique->setAlbum(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Genre>
     */
    public function getGenres(): Collection
    {
        return $this->genres;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genres->contains($genre)) {
            $this->genres->add($genre);
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->genres->removeElement($genre);

        return $this;
    }
}
