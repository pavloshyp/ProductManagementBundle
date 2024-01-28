<?php

declare(strict_types=1);

namespace ProductManagement\Dto;

readonly class ProductDto
{
    public function __construct(
        public string $id,
        public string $name,
        public float  $price,
        public int    $quantity,
    )
    {
    }
}
