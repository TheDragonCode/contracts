<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Exceptions;

use Helldar\Contracts\Http\Builder;
use Throwable;

interface ExceptionManager
{
    public function throw(Throwable $e, Builder $uri): void;
}
