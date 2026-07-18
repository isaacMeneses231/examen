<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleFactoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLineController;
use App\Http\Controllers\ShippingAddressController;




Route::get('/', function () {
    return view('welcome');
});

// Agrupamos todas las rutas protegidas para aplicar el middleware prevent-back-history
Route::middleware(['auth', 'verified', 'prevent-back-history'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas de Categorías
    Route::resource('articles', ArticleController::class);

    // Rutas de Notas
    Route::resource('article_factories', ArticleFactoryController::class);

    Route::resource('clients', ClientController::class);    

    Route::resource('factories', FactoryController::class);

    Route::resource('orders', OrderController::class);

    Route::resource('order_lines', OrderLineController::class);

    Route::resource('shipping_addresses', ShippingAddressController::class);

    // Rutas de Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';