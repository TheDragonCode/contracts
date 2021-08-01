<?php

declare(strict_types=1);

namespace Helldar\Contracts\Exceptions;

use Helldar\Contracts\Http\Builder;

interface Manager
{
    public function throw(Builder $uri, int $code, array $response): void;
}
