<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Config;

use Helldar\Contracts\DataTransferObject\DataTransferObject;

/** @method static Driver make() */
interface Driver extends DataTransferObject
{
    /** @return \Helldar\Contracts\Cashier\Driver|string */
    public function getDriver(): string;

    /** @return \Helldar\Contracts\Cashier\Resources\Model|string */
    public function getResource(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;
}
