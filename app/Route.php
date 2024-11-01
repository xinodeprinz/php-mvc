<?php

use App\Controllers\HomeController;
use Core\Router as Route;

// Declare your routes here

// Get requests
Route::get('/', [HomeController::class, 'index']);
Route::get('/create', [HomeController::class, 'create']);
Route::get('/update/{id}', [HomeController::class, 'updateForm']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/login', [HomeController::class, 'loginForm']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);

// Post requests
Route::post('/create', [HomeController::class, 'createUser']);
Route::post('/update/{id}', [HomeController::class, 'update']);
Route::post('/login', [HomeController::class, 'login']);
