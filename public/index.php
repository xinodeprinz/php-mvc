<?php

use Core\Router as Route;
use Core\Request;
use App\Controllers\HomeController;

require_once "../vendor/autoload.php";

Route::get('/', [HomeController::class, 'index']);
Route::post('/submit', [HomeController::class, 'submit']);

// Get the action to execute
Route::direct(Request::uri(), Request::method());
