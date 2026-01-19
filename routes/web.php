<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\VinylController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('vinyls', VinylController::class);

Route::get('vinyls/', function () {
    return redirect()->route('vinyls.shop');
});

Route::get('/shop', [VinylController::class, 'shop'])->name('vinyls.shop');
Route::get('/marktplaats', [VinylController::class, 'marktplaats'])->name('vinyls.marktplaats');

Route::post('/vinyls/{vinyl}/reactions', [ReactionController::class, 'store'])->name('reactions.store')->middleware('auth');

Route::view('/about', 'about')->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{vinyl}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/{cartItem}', [CartController::class, 'remove'])->name('cart.remove');
    Route::patch('/cart/update/{cartItem}', [CartController::class, 'update'])->name('cart.update');
});

require __DIR__ . '/auth.php';
