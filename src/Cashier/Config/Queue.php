<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

interface Queue
{
    public function getConnection(): ?string;

    public function getName(): ?string;
}
