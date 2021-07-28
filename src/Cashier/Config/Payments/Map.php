<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Config\Payments;

use Helldar\Contracts\DataTransferObject\DataTransferObject;

interface Map extends DataTransferObject
{
    public function getAll(): array;

    public function getTypes(): array;

    public function getNames(): array;

    public function get(string $type): string;
}
