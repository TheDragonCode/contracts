<?php

namespace Helldar\Contracts\Cashier\Authentication;

use DateTimeInterface;
use Helldar\Contracts\Support\Arrayable;

interface Credentials extends Arrayable
{
    public function __construct(array $items = []);

    public function getClientId(): string;

    public function getAccessToken(): string;

    public function getExpiresIn(): DateTimeInterface;
}
