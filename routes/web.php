<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Ove linije registruju sve rute (index, store, show, itd.) za tvoje kontrolere
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('order', OrderController::class);
Route::resource('user', UserController::class);
