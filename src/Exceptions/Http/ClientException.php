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

namespace Helldar\Contracts\Exceptions\Http;

use Helldar\Contracts\Http\Builder;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

interface ClientException extends HttpExceptionInterface
{
    public function __construct(Builder $uri, string $reason = null);
}
