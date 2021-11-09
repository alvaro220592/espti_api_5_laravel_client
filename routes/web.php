<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('products/{pagina}', [ProductController::class, 'paginate'])->name('paginate');
Route::post('login', [ProductController::class, 'login']);
Route::resource('products', ProductController::class);