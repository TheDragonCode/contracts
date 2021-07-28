<?php

declare(strict_types = 1);

namespace Helldar\Contracts\Cashier\Resources;

use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @method static Request make(EloquentModel $model)
 */
interface Model
{
    public function __construct(EloquentModel $model);

    public function getClientId(): string;

    public function getClientSecret(): string;

    public function getUniqueId(bool $every = false): string;

    public function getPaymentId(): string;

    public function getSum(): int;

    public function getCurrency(): string;

    public function getCreatedAt(): string;
}
