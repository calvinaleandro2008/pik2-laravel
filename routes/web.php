<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pik2Controller;

// Halaman Utama & Form Promo
Route::get('/', [Pik2Controller::class, 'index']);
Route::post('/promo', [Pik2Controller::class, 'storePromo']);

// Halaman Data Perumahan & CRUD Stok
Route::get('/perumahan', [Pik2Controller::class, 'perumahan']);
Route::post('/perumahan', [Pik2Controller::class, 'storePerumahan']);
Route::put('/perumahan/{id}', [Pik2Controller::class, 'updatePerumahan']);
Route::delete('/perumahan/{id}', [Pik2Controller::class, 'destroyPerumahan']);

// Autentikasi Manager
Route::post('/login-manager', [Pik2Controller::class, 'loginManager']);
Route::post('/logout-manager', [Pik2Controller::class, 'logoutManager']);