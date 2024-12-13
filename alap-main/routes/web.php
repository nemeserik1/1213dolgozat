<?php

use App\Http\Controllers\GiftTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new-gift-type', [GiftTypeController::class, 'index'])->name('gift_types.index');
Route::post('/new-gift-type', [GiftTypeController::class, 'create'])->name('gift_types.create');

Route::get('/gift_types', [GiftTypeController::class, 'list'])->name('gift_types.list');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
