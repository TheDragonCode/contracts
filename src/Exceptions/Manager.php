<?php

declare(strict_types=1);

namespace Helldar\Contracts\Exceptions;

use Helldar\Contracts\Http\Builder;

interface Manager
{
    public function validateResponse(Builder $uri, array $response, int $status_code): void;

    public function throw(Builder $uri, int $code, array $response): void;
}
