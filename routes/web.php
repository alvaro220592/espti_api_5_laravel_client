<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::post('login', [ProductController::class, 'login']);
Route::resource('products', ProductController::class);