<?php

/*
 * This file is part of the "andrey-helldar/contracts" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@ai-rus.com>
 *
 * @copyright 2021 Andrey Helldar
 *
 * @license MIT
 *
 * @see https://github.com/andrey-helldar/contracts
 */

declare(strict_types=1);

namespace Helldar\Contracts\Cashier;

use Helldar\Contracts\Cashier\Helpers\Statuses;
use Helldar\Contracts\Cashier\Http\Response;
use Helldar\Contracts\Cashier\Resources\Details;
use Illuminate\Database\Eloquent\Model;

/** @method static Driver make(Config\Driver $config, Model $payment) */
interface Driver
{
    public function __construct(Config\Driver $config, Model $payment);

    public function statuses(): Statuses;

    public function details(array $details): Details;

    public function start(): Response;

    public function check(): Response;

    public function refund(): Response;
}
