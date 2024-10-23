<?php

use Core\Router as Route;
use Core\Request;
use Core\Env;

session_start();

require_once "../vendor/autoload.php";
require_once "../core/Helpers.php";
require_once "../app/Route.php";

// Load .env file
Env::load(__DIR__ . '/../.env');

// Get the action to execute
Route::direct(Request::uri(), Request::method());
