<?php

namespace Helldar\Contracts\Cashier;

use Helldar\Contracts\Cashier\DTO\Config;
use Helldar\Contracts\Cashier\Exceptions\Exception;
use Helldar\Contracts\Cashier\Http\Response;
use Helldar\Contracts\Cashier\Resources\Status;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Driver make(Config $config)
 */
interface Driver
{
    public function __construct(Config $config);

    public function response(array $data, bool $mapping = true): Response;

    public function model(Model $model, string $request): self;

    public function statuses(): Status;

    public function exception(): Exception;

    public function host(): string;

    public function start(): Response;

    public function check(): Response;

    public function refund(): Response;
}
