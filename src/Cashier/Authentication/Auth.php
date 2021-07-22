<?php

namespace Helldar\Contracts\Cashier\Authentication;

interface Auth
{
    public function accessToken(Client $client): Credentials;
}
