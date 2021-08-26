<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

use Helldar\Contracts\Cashier\Config\Queues\Names;

interface Queue
{
    public function getConnection(): ?string;

    public function getNames(): Names;

    public function afterCommit(): bool;

    public function getTries(): int;
}
