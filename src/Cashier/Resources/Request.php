<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\Http\Builder;

/**
 * @method static Request make(Model $model, string $auth = null, bool $hash_token = true)
 */
interface Request
{
    public function __construct(Model $model, string $auth = null, bool $hash_token = true);

    public function uri(): Builder;

    public function headers(): array;

    public function body(): array;
}
