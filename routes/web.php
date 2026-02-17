<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PageController::class, 'home']);
Route::get('/shop', [\App\Http\Controllers\ProductsController::class, 'catalog']);
Route::get('/shop/add', [\App\Http\Controllers\ProductsController::class, 'add']);
Route::post('/shop/create', [\App\Http\Controllers\ProductsController::class, 'create']);
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);


