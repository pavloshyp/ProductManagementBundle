<?php

declare(strict_types=1);

namespace ProductManagement\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'products')]
#[ORM\MappedSuperclass]
class Product
{
    public const int MAX_NAME_LENGTH = 255;

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    #[ORM\Column(type: 'uuid', unique: true)]
    private string $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'decimal')]
    private float $price;

    #[ORM\Column(type: 'integer')]
    private int $quantity;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }
}
