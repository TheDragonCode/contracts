<?php

namespace Helldar\Contracts\Cashier\DTO;

interface Config
{
    public function __construct(array $data);

    public function getDriver(): string;

    public function getRequest(): string;

    public function getClientId(): ?string;

    public function getClientSecret(): ?string;
}
