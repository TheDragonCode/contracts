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

namespace Helldar\Contracts\LangPublisher;

interface Provider
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return \Helldar\Contracts\LangPublisher\Plugin[]
     */
    public function plugins(): array;
}
