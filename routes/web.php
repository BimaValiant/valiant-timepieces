<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\AdminWatchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama / Katalog Jam Tangan
Route::get('/', [WatchController::class, 'index'])->name('home');

// Halaman Detail Jam Tangan
Route::get('/watch/{id}', [WatchController::class, 'show'])->name('watch.show');

// Redirect Dashboard Breeze langsung ke Admin Panel
Route::get('/dashboard', function () {
    return redirect()->route('admin.watches.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route CRUD Admin Inventory
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/watches', [AdminWatchController::class, 'index'])->name('watches.index');
    Route::get('/watches/create', [AdminWatchController::class, 'create'])->name('watches.create');
    Route::post('/watches', [AdminWatchController::class, 'store'])->name('watches.store');
    Route::get('/watches/{id}/edit', [AdminWatchController::class, 'edit'])->name('watches.edit');
    Route::put('/watches/{id}', [AdminWatchController::class, 'update'])->name('watches.update');
    Route::delete('/watches/{id}', [AdminWatchController::class, 'destroy'])->name('watches.destroy');
});

require __DIR__.'/auth.php';