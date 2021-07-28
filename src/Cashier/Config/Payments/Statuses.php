<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config\Payments;

use Helldar\Contracts\DataTransferObject\DataTransferObject;

interface Statuses extends DataTransferObject
{
    public function getAll(): array;

    public function getStatus(string $status);
}
