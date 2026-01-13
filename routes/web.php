<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Glavni Dashboard - pristupan samo ulogovanim korisnicima
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// SVE OVE RUTE ISPOD ZAHTEVAJU LOGIN (Admin/User sekcija)
Route::middleware('auth')->group(function () {

    // 1. Profil rute (Breeze automatski generisao)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. CRUD rute (Onih 4 resource kontrolera koje profesor traži)
    // Ovo pokriva: index, create, store, show, edit, update, destroy
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('order', OrderController::class);

    // 3. USE CASE rute (Funkcionalnosti koje nisu običan CRUD)
    // Use Case 1: Brza kupovina proizvoda
    Route::post('/product/{product}/buy', [ProductController::class, 'buy'])->name('product.buy');

    // Use Case 2: Filtriranje proizvoda po kategoriji
    Route::get('/category/{category}/products', [CategoryController::class, 'showProducts'])->name('category.products');

    // Use Case 3: Otkazivanje narudžbine (User akcija)
    Route::post('/order/{order}/cancel', [OrderController::class, 'cancel'])->name('order.cancel');
});

require __DIR__.'/auth.php';
