<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\DataTransferObject\DataTransferObject;
use Helldar\Contracts\Support\Arrayable;
use Helldar\Contracts\Support\Jsonable;

/** @method static Response make(array $items = []) */
interface Response extends DataTransferObject, Arrayable, Jsonable
{
    public function getPaymentId(): ?string;

    public function getStatus(): ?string;
}
