<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GeneralController::class, 'index']);
Route::get('/about', [GeneralController::class, 'about']);
Route::get('/kelas', [GeneralController::class, 'kelas']);
Route::get('/detailkelas', [GeneralController::class, 'detailkelas']);
Route::get('/detailzoom', [GeneralController::class, 'detailzoom']);
Route::get('/detailcourse', [GeneralController::class, 'detailcourse']);
Route::get('/invoice', [GeneralController::class, 'invoice']);
Route::get('/login', [GeneralController::class, 'login']);
Route::get('/register', [GeneralController::class, 'register']);

Route::get('/dashboarduser', [StudentController::class, 'index']);
Route::get('/kelaszoom', [StudentController::class, 'kelaszoom']);
Route::get('/profil', [StudentController::class, 'profil']);
Route::get('/ubahpassword', [StudentController::class, 'password']);
