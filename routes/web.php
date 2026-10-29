<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AndiController; // Pastikan memanggil Controller ini

// Menghubungkan URL utama (/) ke AndiController method index
Route::get('/', [AndiController::class, 'index']);
