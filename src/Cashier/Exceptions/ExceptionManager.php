<?php

namespace Helldar\Contracts\Cashier\Exceptions;

use Helldar\Contracts\Http\Builder;

interface ExceptionManager
{
    public function throw(?int $code, Builder $uri): void;
}
