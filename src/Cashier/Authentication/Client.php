<?php

namespace Helldar\Contracts\Cashier\Authentication;

interface Client
{
    public function setClientId(?string $client_id): self;

    public function getClientId(): ?string;

    public function setClientSecret(?string $client_secret): self;

    public function getClientSecret(): ?string;

    public function doesntEmpty(): bool;
}
