<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

use Helldar\Contracts\Cashier\Config\Payments\Attributes;
use Helldar\Contracts\Cashier\Config\Payments\Map;
use Helldar\Contracts\Cashier\Config\Payments\Statuses;

interface Payment
{
    public function getModel(): string;

    public function getAttributes(): Attributes;

    public function getStatuses(): Statuses;

    public function getMap(): Map;
}
