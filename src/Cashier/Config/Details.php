<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Config;

interface Details
{
    public function getTable(): string;
}
