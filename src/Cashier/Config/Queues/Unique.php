<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config\Queues;

interface Unique
{
    public function getDriver(): string;

    public function getSeconds(): int;
}
