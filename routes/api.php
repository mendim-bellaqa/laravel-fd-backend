<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;

// Categories
Route::get('/categories', [CategoryController::class, 'getAll']);


// ..
