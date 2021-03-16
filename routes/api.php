<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cities\CityController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\ProductSizesController\ProductSizeController;



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
Route::get('/products', [ProductController::class, 'getAll']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::post('/products', [ProductController::class, 'create']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::get('/products/{id}', [ProductController::class, 'show']);
// ..


// Products SIZES
Route::get('/products-size', [ProductSizeController::class, 'getAll']);
Route::delete('/products-size/{id}', [ProductSizeController::class, 'delete']);
Route::post('/products-size', [ProductSizeController::class, 'create']);
Route::put('/products-size/{id}', [ProductSizeController::class, 'update']);
Route::get('/products-size/{id}', [ProductSizeController::class, 'show']);
// ..