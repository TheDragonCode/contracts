<?php

namespace Helldar\Contracts\Cashier\Authentication\Drivers;

use Helldar\Contracts\Cashier\Authentication\Client;
use Helldar\Contracts\Cashier\Authentication\Tokenable;

interface Auth
{
    public function getAccessToken(Client $client): Tokenable;
}
