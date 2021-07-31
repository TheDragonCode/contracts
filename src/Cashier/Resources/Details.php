<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\DataTransferObject\DataTransferObject;
use Helldar\Contracts\Support\Arrayable;
use Helldar\Contracts\Support\Jsonable;

/** @method static make(array $details = []) */
interface Details extends DataTransferObject, Jsonable, Arrayable
{
    public function getStatus(): ?string;
}
