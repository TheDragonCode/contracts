<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Http;

use Helldar\Contracts\DataTransferObject\DataTransferObject;
use Helldar\Contracts\Support\Arrayable;

/** @method static Response make(array $items = []) */
interface Response extends DataTransferObject, Arrayable
{
    public function getExternalId(): ?string;

    public function getStatus(): ?string;

    public function isEmpty(): bool;
}
