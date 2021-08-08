<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Helpers;

use Illuminate\Database\Eloquent\Model;

/** @method static Statuses make(Model $model) */
interface Statuses
{
    public function __construct(Model $model);

    public function hasUnknown($status = null): bool;

    public function hasCreated($status = null): bool;

    public function hasFailed($status = null): bool;

    public function hasRefunded($status = null): bool;

    public function hasRefunding($status = null): bool;

    public function hasSuccess($status = null): bool;

    public function inProgress($status = null): bool;
}
