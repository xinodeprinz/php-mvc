<?php

/** 
 * Load a view and pass data to it
 * @param string $view The name of the view file to load
 * @param array $data An associative array of data to pass to the view file
 * @param string|null $layout Used to load a layout file
 */

function view(string $view, array $data = [], $layout = null)
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

/** 
 * Redirect to a specific URL
 * @param string $url The URL to redirect to
 * @param array $flashData An associative array of data to pass to the session
 */
function redirect(string $url, array $flashData = [])
{
    if (!empty($flashData)) {
        foreach ($flashData as $key => $message) {
            $_SESSION['flash'][$key] = $message;
        }
    }

    return header("Location: {$url}");
}

/** 
 * Redirect to the previous URL
 * @param array $flashData An associative array of data to pass to the session
 */
function back(array $flashData = [])
{
    if (!empty($flashData)) {
        foreach ($flashData as $key => $message) {
            $_SESSION['flash'][$key] = $message;
        }
    }

    $previousURL = $_SERVER['HTTP_REFERER'];
    return header("Location: {$previousURL}");
}

/** 
 * Redirect to the previous URL
 * @param string $key The key of the flash message
 * @return string|null
 */
function getFlash(string $key)
{
    if (isset($_SESSION['flash'][$key])) {
        $message =  $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);
        return $message;
    }
    return null;
}
