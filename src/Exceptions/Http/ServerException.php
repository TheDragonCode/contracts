<?php

declare(strict_types=1);

namespace Helldar\Contracts\Exceptions\Http;

use Helldar\Contracts\Http\Builder;
use Throwable;

interface ServerException extends Throwable
{
    public function __construct(Builder $uri, string $reason = null);
}
