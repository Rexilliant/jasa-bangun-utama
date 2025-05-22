<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("beranda");
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name("tentang-kami");
Route::get('/portfolio-detail', function () {
    return view('portfolio-detail');
});
Route::get('/login', function () {
    return view('login');
})->name("login");
Route::get('/konsultasi', function () {
    return view('konsultasi');
})->name("konsultasi");

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');
});
