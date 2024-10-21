<?php

namespace Core;

class Controller
{
    protected function validate(array $data)
    {
        $keys = array_keys($data);
        foreach ($keys as $key) {
            if (empty($data[$key])) {
                return back(['error' => "The {$key} is required."]);
            }
        }
    }
}
