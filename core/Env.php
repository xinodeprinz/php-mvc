<?php

namespace Core;

class Env
{
    public static function load(string $path)
    {
        if (!file_exists($path)) {
            throw new \Exception(".env file not found at: {$path}");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) {
                continue;
            }

            list($name, $value) =  explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!getenv($name)) {
                putenv("{$name}={$value}");
            }
        }
    }
}
