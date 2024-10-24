<?php

use App\Controllers\HomeController;
use Core\Router as Route;

// Declare your routes here
Route::get('/', [HomeController::class, 'index']);
Route::get('/create', [HomeController::class, 'create']);
Route::post('/create', [HomeController::class, 'createUser']);
Route::get('/update/{id}', [HomeController::class, 'updateForm']);
Route::post('/update/{id}', [HomeController::class, 'update']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
