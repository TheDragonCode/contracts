<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Auth;

use Helldar\Contracts\Cashier\Http\Request;
use Helldar\Contracts\Cashier\Resources\Model;

/** @method static Auth make(Model $model, Request $request, bool $hash = true) */
interface Auth
{
    public function __construct(Model $model, Request $request, bool $hash = true);

    public function headers(): array;

    public function body(): array;
}
