<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Helpers;

use Illuminate\Database\Eloquent\Model;

/** @method static Statuses make(Model $model) */
interface Statuses
{
    public function __construct(Model $model);

    public function hasUnknown(string $status = null): bool;

    public function hasCreated(string $status = null): bool;

    public function hasFailed(string $status = null): bool;

    public function hasRefunded(string $status = null): bool;

    public function hasRefunding(string $status = null): bool;

    public function hasSuccess(string $status = null): bool;

    public function inProgress(string $status = null): bool;
}
