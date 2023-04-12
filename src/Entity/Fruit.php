<?php

namespace App\Entity;

use App\Repository\FruitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FruitRepository::class)]
class Fruit
{
    #[ORM\Id]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?string $family = null;

    #[ORM\Column(length: 100)]
    private ?string $ordar = null;

    #[ORM\Column(length: 100)]
    private ?string $genus = null;

    #[ORM\Column(length: 255)]
    private ?string $nutritions = null;
	
	#[ORM\Column]
    private ?bool $favorite = null;

    public function getId(): ?int
    {
        return $this->id;
    }
	
	public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getOrdar(): ?string
    {
        return $this->ordar;
    }

    public function setOrdar(string $ordar): self
    {
        $this->ordar = $ordar;

        return $this;
    }

    public function getGenus(): ?string
    {
        return $this->genus;
    }

    public function setGenus(string $genus): self
    {
        $this->genus = $genus;

        return $this;
    }

    public function getNutritions(): ?string
    {
        return $this->nutritions;
    }

    public function setNutritions(string $nutritions): self
    {
        $this->nutritions = $nutritions;

        return $this;
    }
	
	public function isFavorite(): ?bool
    {
        return $this->favorite;
    }

    public function setFavorite(bool $favorite): self
    {
        $this->favorite = $favorite;

        return $this;
    }
}
