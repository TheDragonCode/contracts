<?php

namespace Helldar\Contracts\DataTransferObject;

interface DataTransferObject
{
    public function __construct(array $items = []);
}
