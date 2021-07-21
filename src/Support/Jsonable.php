<?php

namespace Helldar\Contracts\Support;

interface Jsonable
{
    /**
     * Convert the object to its JSON representation.
     *
     * @param  int  $options
     *
     * @return string
     */
    public function toJson(int $options = 0): string;

    /**
     * Convert JSON string to object.
     *
     * @return \Helldar\Contracts\Support\Jsonable
     */
    public function fromJson(): self;
}
