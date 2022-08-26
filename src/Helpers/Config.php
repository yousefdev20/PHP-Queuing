<?php

namespace Yousef\QueuingSystem\Helpers;

use Couchbase\IndexNotFoundException;

class Config
{
    static function get(string $config): string|array
    {
        try {
        $keys = explode('.', $config);
        $configurations = include __DIR__ . '/../../config/' . $keys[0] . '.php';
        unset($keys[0]);
        $index = '';
        foreach ($keys ?? [] as $key) {
            $index .= "['" . $key . "']";
        }
            $expected = $configurations['connection'];
        }catch (\Exception $ex) {
            echo "index [" . '$index' . "] not found";
        }
        return $expected;
    }
}