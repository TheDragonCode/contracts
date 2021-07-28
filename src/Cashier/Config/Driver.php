<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Config;

use Helldar\Contracts\DataTransferObject\DataTransferObject;

/** @method static Driver make() */
interface Driver extends DataTransferObject
{
    /** @return string|\Helldar\Contracts\Cashier\Driver */
    public function getDriver(): string;

    /** @return string|\Helldar\Contracts\Cashier\Resources\Model */
    public function getResource(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;
}
