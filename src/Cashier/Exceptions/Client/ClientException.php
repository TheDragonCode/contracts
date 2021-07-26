<?php

namespace Helldar\Contracts\Cashier\Exceptions\Client;

use Psr\Http\Message\UriInterface;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

interface ClientException extends HttpExceptionInterface
{
    public function __construct(UriInterface $uri);
}
