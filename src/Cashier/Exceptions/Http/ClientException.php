<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Exceptions\Http;

use Helldar\Contracts\Http\Builder;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

interface ClientException extends HttpExceptionInterface
{
    public function __construct(Builder $uri);
}
