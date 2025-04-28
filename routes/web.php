<?php

use Illuminate\Support\Facades\Route;
//ANJAY CUKURUKUKKK
//ANJAY CUKURUKUKKK
//ANJAY CUKURUKUKKK
//LAPPET
//PBL SERUUUU !!!!!!



//ROUTE DUMMY SEMENTARA YA BOSSQUUUEEEE


//INI HALAMAN DEPAN SEBELUM LOGIN
Route::get('/', function () {
    return view('pages.landing.landingpg');
})->name('landing');
Route::get('/about', function () {
    return view('pages.landing.about');
})->name('about');
Route::get('/fitur', function () {
    return view('pages.landing.fitur');
})->name('fitur');

//HALAMAN AUTENTIKASI LOGIN DAN DAFTAR
Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');
Route::get('/daftar', function () {
    return view('pages.auth.daftar');
})->name('register');


//INI HALAMAN SETELAH LOGIN / SUDAH TERAUTENTIKASI
Route::get('/beranda', function () {
    return view('pages.beranda');
})->name('beranda');
Route::get('/notifikasi', function () {
    $notifikasi = [
        ["tanggal" => "19/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
        ["tanggal" => "18/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
        ["tanggal" => "17/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
        ["tanggal" => "16/04/2025", "pesan" => "Jangan lupa latihan Hari ini ya tetap semangat"],
      ];
    return view('pages.notifikasi', compact('notifikasi'));
})->name('notifikasi');
Route::get('/latihan', function () {
    return view('pages.programlatihan');
})->name('latihan');
Route::get('/progres', function () {
    return view('pages.progres');
})->name('progres');
Route::get('/resep', function () {
    return view('pages.resepmakan');
})->name('resep');
