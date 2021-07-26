<?php

namespace Helldar\Contracts\Cashier\Authentication;

interface AccessToken
{
    public function getAccessToken(Client $client): Tokenable;
}
