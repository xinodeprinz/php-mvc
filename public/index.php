<?php

use Core\Router as Route;
use Core\Request;
use App\Controllers\HomeController;

session_start();

require_once "../vendor/autoload.php";
require_once "../core/Helpers.php";

// Declare your routes here
Route::get('/', [HomeController::class, 'index']);
Route::get('/create', [HomeController::class, 'create']);
Route::post('/create', [HomeController::class, 'createUser']);

// Get the action to execute
Route::direct(Request::uri(), Request::method());
