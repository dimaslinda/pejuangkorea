<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/kelas', [GeneralController::class, 'kelas']);
Route::get('/kelaszoom', [GeneralController::class, 'zoom']);
Route::get('/detailkelas/{slug}', [GeneralController::class, 'detailkelas']);
Route::get('/detailzoom/{slug}', [GeneralController::class, 'detailzoom']);
Route::get('/invoice/{slug}', [GeneralController::class, 'invoice']);
Route::post('/prosescheckoutcourse', [InvoiceController::class, 'prosescheckoutcourse']);
Route::get('/infopembayaran/{no_invoice}', [InvoiceController::class, 'infopembayaran'])->name('infopembayaran');
Route::get('/konfirmasipembayaran/{no_invoice}', [InvoiceController::class, 'konfirmasipembayaran'])->name('konfirmasipembayaran');
Route::post('/updateinvoice/{no_invoice}', [InvoiceController::class, 'updateinvoice'])->name('updateinvoice');



Route::get('/dashboard', [StudentController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/about', [GeneralController::class, 'about']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/editprofile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pesanan', [StudentController::class, 'pesanan']);
    Route::get('/detailpesanan/{no_invoice}', [StudentController::class, 'detailpesanan'])->name('detailpesanan');
    Route::get('/dalamproses', [StudentController::class, 'dalamproses'])->name('dalamproses');
});

require __DIR__.'/auth.php';
