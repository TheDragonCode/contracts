<?php

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\DataTransferObject\DataTransferObject;
use Helldar\Contracts\Support\Arrayable;

interface Response extends DataTransferObject, Arrayable
{
    public function getPaymentId(): ?string;

    public function getStatus(): ?string;
}
