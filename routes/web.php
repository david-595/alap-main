<?php

use App\Http\Controllers\GiftTypeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/new-gift-type',[GiftTypeController::class, 'create'])->name('gift.create');
Route::post('/new-gift-type', [GiftTypeController::class, 'store'])->name('gift.store');

Route::get('/gift_types', [GiftTypeController::class, 'index'])->name('gift.index');

Route::get('/new-user', [PersonController::class, 'create'])->name('user.create');
Route::post('/new-user', [PersonController::class, 'store'])->name('user.store');

Route::get('/users',[PersonController::class, 'index'])->name('users.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
