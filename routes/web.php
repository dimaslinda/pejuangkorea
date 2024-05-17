<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/kelas', [GeneralController::class, 'kelas']);
Route::get('/kelaszoom', [GeneralController::class, 'zoom']);
Route::get('/detailkelas/{slug}', [GeneralController::class, 'detailkelas']);
Route::get('/detailzoom/{slug}', [GeneralController::class, 'detailzoom']);


Route::get('/dashboard', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/about', [GeneralController::class, 'about']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/editprofile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
