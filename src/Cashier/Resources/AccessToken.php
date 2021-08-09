<?php

declare(strict_types=1);

namespace Helldar\Contracts\Cashier\Resources;

use Illuminate\Support\Carbon;

interface AccessToken
{
    public function getClientId(): string;

    public function getAccessToken(): string;

    public function getExpiresIn(): Carbon;
}
