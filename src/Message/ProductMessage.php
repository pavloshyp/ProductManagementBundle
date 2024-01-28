<?php

declare(strict_types=1);

namespace ProductManagement\Message;

use ProductManagement\Dto\ProductDto;

readonly class ProductMessage
{
    public function __construct(public ProductDto $productDto)
    {
    }
}