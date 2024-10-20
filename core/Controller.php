<?php

namespace Core;

class Controller
{
    /** 
     * Load a view and pass data to it
     * @param string $view The name of the view file to load
     * @param array $data An associative array of data to pass to the view file
     */

    protected static function view(string $view, array $data = [])
    {
        extract($data);
        unset($data);
        require_once "../app/views/{$view}.view.php";
    }
}
