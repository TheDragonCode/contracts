<?php

declare(strict_types=1);

namespace DragonCode\Contracts\Queue;

interface ShouldBeUnique
{
    /**
     * @return int|string
     */
    public function uniqueId();
}
