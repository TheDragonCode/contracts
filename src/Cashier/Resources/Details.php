<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\DataTransferObject\DataTransferObject;
use Helldar\Contracts\Support\Jsonable;

interface Details extends DataTransferObject, Jsonable
{
    public function getStatus(): ?string;
}
