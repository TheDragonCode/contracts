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
    public function getDetails(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;

    /** @return bool|string */
    public function getVerifySsl();

    public function hasCertificate(): bool;

    public function getCertificatePath(): ?string;

    public function getCertificatePassword(): ?string;
}
