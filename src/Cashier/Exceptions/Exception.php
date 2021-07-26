<?php

namespace Helldar\Contracts\Cashier\Exceptions;

use Psr\Http\Message\UriInterface;

interface Exception
{
    public function throw(?int $code, UriInterface $uri): void;
}
