<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Auth;

use Helldar\Contracts\Cashier\Resources\Model;

interface Auth
{
    public function __construct(Model $model);

    public function headers(): array;

    public function body(): array;
}
