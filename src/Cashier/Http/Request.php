<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Http;

use Helldar\Contracts\Cashier\Resources\Model;
use Helldar\Contracts\Http\Builder;

/**
 * @method static Request make(Model $model)
 */
interface Request
{
    public function __construct(Model $model);

    public function model(): Model;

    public function uri(): Builder;

    public function headers(): array;

    public function getRawHeaders(): array;

    public function body(): array;

    public function getRawBody(): array;

    public function getHttpOptions(): array;

    public function refreshAuth(): void;
}
