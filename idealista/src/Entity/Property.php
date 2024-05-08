<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertyRepository::class)]
class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $type = null;

    #[ORM\Column(nullable: true)]
    private ?float $sqtm = null;

    #[ORM\Column(nullable: true)]
    private ?int $roomn = null;

    #[ORM\Column(nullable: true)]
    private ?int $bathn = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $cdate = null;

    #[ORM\Column(length: 1080, nullable: true)]
    private ?string $dir = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latlon = null;

    #[ORM\Column]
    private ?float $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getSqtm(): ?float
    {
        return $this->sqtm;
    }

    public function setSqtm(?float $sqtm): static
    {
        $this->sqtm = $sqtm;

        return $this;
    }

    public function getRoomn(): ?int
    {
        return $this->roomn;
    }

    public function setRoomn(?int $roomn): static
    {
        $this->roomn = $roomn;

        return $this;
    }

    public function getBathn(): ?int
    {
        return $this->bathn;
    }

    public function setBathn(?int $bathn): static
    {
        $this->bathn = $bathn;

        return $this;
    }

    public function getCdate(): ?\DateTimeInterface
    {
        return $this->cdate;
    }

    public function setCdate(?\DateTimeInterface $cdate): static
    {
        $this->cdate = $cdate;

        return $this;
    }

    public function getDir(): ?string
    {
        return $this->dir;
    }

    public function setDir(?string $dir): static
    {
        $this->dir = $dir;

        return $this;
    }

    public function getLatlon(): ?string
    {
        return $this->latlon;
    }

    public function setLatlon(?string $latlon): static
    {
        $this->latlon = $latlon;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
