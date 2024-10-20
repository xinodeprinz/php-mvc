<?php

namespace Core;

class Controller
{
    /** 
     * Load a view and pass data to it
     * @param string $view The name of the view file to load
     * @param array $data An associative array of data to pass to the view file
     * @param string|null $layout Used to load a layout file
     */

    protected static function view(string $view, array $data = [], $layout = null)
    {
        // Converts all attributes into variables and destroys the data array
        extract($data);
        unset($data);

        // Handle buffering
        ob_start();
        require_once "../app/views/{$view}.view.php";
        $content = ob_get_clean();

        // Render view file with or without layout
        if ($layout) {
            require_once "../app/views/layouts/{$layout}.view.php";
        } else {
            echo $content;
        }
    }
}
