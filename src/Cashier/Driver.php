<?php

namespace Helldar\Contracts\Cashier;

use Helldar\Contracts\Cashier\DTO\Config;
use Helldar\Contracts\Cashier\Exceptions\Exception;
use Helldar\Contracts\Cashier\Helpers\Status;
use Helldar\Contracts\Cashier\Resources\Response;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Driver make(Config $config)
 */
interface Driver
{
    public function __construct(Config $config);

    public function response(array $data, bool $mapping = true): Response;

    public function model(Model $model): self;

    public function statuses(): Status;

    public function exception(): Exception;

    public function host(): string;

    public function start(): Response;

    public function check(): Response;

    public function refund(): Response;
}
