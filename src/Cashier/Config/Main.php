<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

interface Main
{
    public function isProduction(): bool;

    public function getLogger(): ?string;

    public function getQueue(): ?string;

    public function getCheckDelay(): int;

    public function getCheckTimeout(): int;

    public function getAutoRefundEnabled(): bool;

    public function getAutoRefundDelay(): int;

    public function getDriver(string $name): Driver;
}
