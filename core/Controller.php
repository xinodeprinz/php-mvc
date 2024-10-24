<?php

namespace Core;

class Controller
{
    /**
     * @param array $data An associative array of the data to validate
     */
    protected function validate(array $data)
    {
        $keys = array_keys($data);
        foreach ($keys as $key) {
            if (empty($data[$key])) {
                setOld($data);
                back(['error' => "The {$key} is required."]);
                exit;
            }
        }
    }
}
