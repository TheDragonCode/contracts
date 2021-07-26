<?php

namespace Helldar\Contracts\Cashier\Authentication;

use Helldar\Contracts\Support\Arrayable;

interface AccessToken extends Arrayable
{
    public function getAccessToken(Client $client): Tokenable;
}
