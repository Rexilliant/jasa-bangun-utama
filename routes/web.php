<?php

use App\Http\Controllers\karyawanController;
use App\Http\Controllers\testimoniController;
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
    Route::get('/konsultasi', function () {
        return view('admin.konsultasi');
    })->name('konsultasi');
    Route::get('/testimoni', [testimoniController::class, 'adminTestimoni'])->name('testimoni');
    Route::get('/proyek', function () {
        return view('admin.proyek');
    })->name('proyek');
    Route::get('/tambah-proyek', function () {
        return view('admin.tambah-proyek');
    })->name('tambah-proyek');
    Route::get('/tambah-testimoni', function () {
        return view('admin.tambah-testimoni');
    })->name('tambah-testimoni');
    Route::get('/edit-testimoni/{id}', [testimoniController::class, 'adminEditTestimoni'])->name('edit-testimoni');
    Route::put('/edit-testimoni/{id}', [testimoniController::class, 'update'])->name('update-testimoni');
    Route::post('/tambah-testimoni', [testimoniController::class, 'store'])->name('store-testimoni');
    Route::delete('/delete-testimoni/{id}', [testimoniController::class, 'destroy'])->name('destroy-testimoni');
    Route::get('/karyawan', [karyawanController::class, 'adminKaryawan'])->name('karyawan');
});
