<?php

namespace Helldar\Contracts\Cashier\Helpers;

use Illuminate\Database\Eloquent\Model;

interface Statuses
{
    public function model(Model $model): self;

    public function hasCreated(string $status = null): bool;

    public function hasFailed(string $status = null): bool;

    public function hasRefunded(string $status = null): bool;

    public function hasRefunding(string $status = null): bool;

    public function hasSuccess(string $status = null): bool;

    public function inProgress(string $status = null): bool;
}
