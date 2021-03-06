<?php

namespace DragonCode\Contracts\ApiResponse;

use Symfony\Component\HttpFoundation\JsonResponse;

interface Responsable
{
    public static function allowWith(): void;

    public static function withoutWith(): void;

    public static function wrapped(): void;

    public static function withoutWrap(): void;

    public function with(array $with = []): self;

    public function headers(array $headers = []): self;

    public function statusCode(?int $code = null): self;

    public function data($data = null): self;

    public function response(): JsonResponse;
}
