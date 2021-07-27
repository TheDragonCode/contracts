<?php

namespace Helldar\Contracts\Cashier;

use Helldar\Contracts\Cashier\Exceptions\ExceptionManager;
use Helldar\Contracts\Cashier\Helpers\Statuses;
use Helldar\Contracts\Cashier\Resources\Response;
use Illuminate\Database\Eloquent\Model;

interface Driver
{
    public function model(Model $model): self;

    public function statuses(): Statuses;

    public function exception(): ExceptionManager;

    public function start(): Response;

    public function check(): Response;

    public function refund(): Response;
}
