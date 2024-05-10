<?php

use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/about', [GeneralController::class, 'about']);
Route::get('/kelas', [GeneralController::class, 'kelas']);
Route::get('/detailkelas', [GeneralController::class, 'detailkelas']);
