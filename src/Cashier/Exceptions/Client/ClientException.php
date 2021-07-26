<?php

namespace Helldar\Contracts\Cashier\Exceptions\Client;

use Psr\Http\Message\UriInterface;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

interface ClientException extends ExceptionInterface
{
    public function __construct(UriInterface $uri);
}
