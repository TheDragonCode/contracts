<?php

namespace Helldar\Contracts\Cashier\Exceptions\Http;

use Helldar\Contracts\Http\Builder;
use Throwable;

interface ServerException extends Throwable
{
    public function __construct(Builder $uri);
}
