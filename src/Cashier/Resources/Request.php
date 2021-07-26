<?php

namespace Helldar\Contracts\Cashier\Resources;

use Helldar\Contracts\Cashier\Authentication\Client;
use Helldar\Contracts\Cashier\DTO\Config;
use Illuminate\Database\Eloquent\Model;

interface Request
{
    public function __construct(Model $model, Config $config);

    public function getAuthentication(): Client;

    public function getUniqueId(bool $every = false): string;

    public function getPaymentId(): string;

    public function getSum(): int;

    public function getCurrency(): string;

    public function getCreatedAt(): string;

    public function getNow(): string;
}
