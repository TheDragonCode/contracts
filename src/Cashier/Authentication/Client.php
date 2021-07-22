<?php

namespace Helldar\Contracts\Cashier\Authentication;

interface Client
{
    public function clientId(string $client_id): self;

    public function getClientId(): string;

    public function clientSecret(string $client_secret): self;

    public function getClientSecret(): string;
}
