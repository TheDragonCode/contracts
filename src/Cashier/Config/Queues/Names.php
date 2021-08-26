<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config\Queues;

interface Names
{
    public function getStart(): ?string;

    public function getCheck(): ?string;

    public function getRefund(): ?string;
}
