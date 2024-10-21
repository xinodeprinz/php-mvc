<?php

namespace Core;

class Request
{
    protected array $data;

    public function __construct()
    {
        $this->data = array_merge($_GET, $_POST);
    }

    public function __get(string $key)
    {
        return $this->data[$key] ?? null;
    }

    public function __isset(string $key)
    {
        return isset($this->data[$key]);
    }

    public function all()
    {
        return $this->data;
    }

    public function input(string $key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
