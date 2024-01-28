<?php

declare(strict_types=1);

namespace ProductManagement;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ProductManagementBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
