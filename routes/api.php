<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cities\CityController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Categories\CategoryController;


// Categories
Route::get('/categories', [CategoryController::class, 'getAll']);
Route::delete('/categories/{id}', [CategoryController::class, 'delete']);
Route::post('/categories', [CategoryController::class, 'create']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

// ..

// Cities
Route::get('/city', [CityController::class, 'getAll']);
Route::delete('/city/{id}', [CityController::class, 'delete']);
Route::post('/city', [CityController::class, 'create']);
Route::put('/city/{id}', [CityController::class, 'update']);
Route::get('/city/{id}', [CityController::class, 'show']);
// ..

// Products
Route::get('/products', [ProductsController::class, 'getAll']);
Route::delete('/products/{id}', [ProductsController::class, 'delete']);
Route::post('/products', [ProductsController::class, 'create']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::get('/products/{id}', [ProductsController::class, 'show']);
// ..
