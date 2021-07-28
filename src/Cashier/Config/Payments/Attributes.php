<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config\Payments;

use Helldar\Contracts\DataTransferObject\DataTransferObject;

interface Attributes extends DataTransferObject
{
    public function getType(): string;

    public function getStatus(): string;
}
