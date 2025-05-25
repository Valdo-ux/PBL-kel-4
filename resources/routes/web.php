<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProgresController;
use App\Http\Controllers\ProgramLatihanController;
use App\Http\Controllers\ResepMakanController;

// ==========================
// LANDING PAGES
// ==========================
Route::get('/', [LandingpageController::class, 'home'])->name('landing');

Route::prefix('landing')->controller(LandingpageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/fitur', 'fitur')->name('fitur');
});

// ==========================
// AUTENTIKASI
// ==========================
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/daftar', 'daftar')->name('register');
});

// ==========================
// BERANDA
// ==========================
Route::prefix('beranda')->controller(BerandaController::class)->group(function () {
    Route::get('/', 'beranda')->name('beranda');
    Route::get('/trainer', 'beranda_trainer')->name('beranda-trainer');
});

// ==========================
// NOTIFIKASI
// ==========================
Route::get('/notifikasi', [NotifikasiController::class, 'notifikasi'])->name('notifikasi');

// ==========================
// PROGRES
// ==========================
Route::prefix('progres')->controller(ProgresController::class)->group(function () {
    Route::get('/', 'progres')->name('progres');
    Route::get('/trainer', 'progres_trainer')->name('progres-trainer');
});

// ==========================
// PROGRAM LATIHAN
// ==========================
Route::prefix('programlatihan')->controller(ProgramLatihanController::class)->group(function () {
    // Trainee View
    Route::get('/trainee', 'programlatihan')->name('latihan');

    // Trainer View + CRUD
    Route::get('/trainer', 'programlatihan_trainer')->name('latihan-trainer');
    Route::post('/trainer', 'store')->name('latihan-trainer.store');
    Route::put('/trainer/{id}', 'update')->name('latihan-trainer.update');
    Route::delete('/trainer/{id}', 'destroy')->name('latihan-trainer.destroy');
});

// ==========================
// RESEP MAKAN
// ==========================
Route::prefix('resepmakan')->controller(ResepMakanController::class)->group(function () {
    Route::get('/', 'resepmakan')->name('resep');
    Route::get('/trainer', 'resepmakan_trainer')->name('resep-trainer');
});
