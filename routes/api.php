<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categories\CategoryController;


// Categories
Route::get('/categories', [CategoryController::class, 'getAll']);
Route::delete('/categories/{id}', [CategoryController::class, 'delete']);
Route::post('/categories', [CategoryController::class, 'create']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);

// ..
