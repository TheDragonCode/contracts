<?php

namespace Helldar\Contracts\Cashier\Http;

use Helldar\Contracts\Support\Arrayable;

interface Response extends Arrayable
{
    public function __construct(array $items = [], bool $mapping = true);

    public function getPaymentId(): ?string;

    public function getStatus(): ?string;
}
