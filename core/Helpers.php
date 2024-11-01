<?php

/** 
 * Load a view and pass data to it
 * @param string $view The name of the view file to load
 * @param string|null $layout Used to load a layout file
 * @param array $data An associative array of data to pass to the view file
 */

function view(string $view, $layout = null, array $data = [])
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

/** 
 * @param array $oldData An associative array of data to pass to the session
 * @return void
 */
function setOld(array $oldData = [])
{
    if (!empty($oldData)) {
        foreach ($oldData as $key => $message) {
            $_SESSION['old'][$key] = $message;
        }
    }
}

/** 
 * @param string $key Key of the old data to get from the session
 * @return string|null Value of the session's key
 */
function old(string $key)
{
    if (isset($_SESSION['old'][$key])) {
        $message =  $_SESSION['old'][$key];
        unset($_SESSION['old'][$key]);
        return $message;
    }
    return null;
}

/**
 * @param string|array $keyOrArray - The key of the session to get or 
 * an associative array of the values to place in the session
 * @param mixed $default (Optional) The default value of the getter
 */
function session($keyOrArray, $default = null)
{
    // If the input is an associative array, set each key-value pair in the session
    if (is_array($keyOrArray)) {
        foreach ($keyOrArray as $key => $value) {
            $_SESSION[$key] = $value;
        }
        return true; // Indicate session values have been set
    }

    // If the input is a string, retrieve the value from the session or return the default
    if (is_string($keyOrArray)) {
        return $_SESSION[$keyOrArray] ?? $default;
    }

    // If the input type is not supported, throw an exception
    throw new InvalidArgumentException("Argument must be an associative array or a string.");
}
