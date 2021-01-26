<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cities\CityController;
use App\Http\Controllers\Categories\CategoryController;


// Categories
Route::get('/categories', [CategoryController::class, 'getAll']);
Route::delete('/categories/{id}', [CategoryController::class, 'delete']);
Route::post('/categories', [CategoryController::class, 'create']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);

// ..

// Cities
Route::get('/city', [CityController::class, 'getAll']);
Route::delete('/city/{id}', [CityController::class, 'delete']);
Route::post('/city', [CityController::class, 'create']);
Route::put('/city/{id}', [CityController::class, 'update']);
// ..
