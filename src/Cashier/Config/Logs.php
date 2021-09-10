<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

interface Logs
{
    public function isEnabled(): bool;

    public function getConnection(): ?string;

    public function getTable(): string;
}
