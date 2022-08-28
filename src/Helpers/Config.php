<?php

namespace Yousef\QueuingSystem\Helpers;

class Config
{
    private static array $config = [];

    static function get(string $key): string|array
    {
        return self::$config[$key];
    }

    static function set(string $key, array|string|null $value): void
    {
        self::$config[$key] = $value;
    }
}