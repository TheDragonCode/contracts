<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\Cashier\Config\Driver;
use Helldar\Contracts\Cashier\Http\Request;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @method static Request make(EloquentModel $model, Driver $config)
 */
interface Model
{
    public function __construct(EloquentModel $model, Driver $config);

    public function getClientId(): string;

    public function getClientSecret(): string;

    public function getUniqueId(bool $every = false): string;

    public function getPaymentId(): string;

    public function getSum(): int;

    public function getCurrency(): string;

    public function getCreatedAt(): string;

    public function getExternalId(): ?string;
}
