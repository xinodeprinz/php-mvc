<?php

use Core\Router as Route;
use Core\Request;
use App\Controllers\HomeController;

session_start();

require_once "../vendor/autoload.php";
require_once "../core/Helpers.php";

Route::get('/', [HomeController::class, 'index']);
Route::post('/submit', [HomeController::class, 'submit']);

// Get the action to execute
Route::direct(Request::uri(), Request::method());
