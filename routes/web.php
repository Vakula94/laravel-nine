<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ShopController;

Route::get('/categories', [ShopController::class, 'categories']);
Route::get('/categories/{id}', [ShopController::class, 'categoryProducts']);
Route::get('/product/{id}', [ShopController::class, 'product']);
