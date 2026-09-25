<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan parameter {nama?}/{npm?}/{kelas?}
Route::get('/profile/{nama?}/{npm?}/{kelas?}', [ProfileController::class, 'profile']);