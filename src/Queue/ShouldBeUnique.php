<?php

declare(strict_types=1);

namespace DragonCode\Contracts\Queue;

interface ShouldBeUnique
{
    /**
     * The unique ID of the object.
     *
     * @return int|string
     */
    public function uniqueId();

    /**
     * The number of seconds after which the object's unique lock will be released.
     *
     * @return \DateTimeInterface|int
     */
    public function uniqueFor();
}
