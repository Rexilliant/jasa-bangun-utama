<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\dokumentasiProyekController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\kategoriProyekController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\pageUserController;
use App\Http\Controllers\pagUserController;
use App\Http\Controllers\proyekController;
use App\Http\Controllers\testimoniController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [pageUserController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [pageUserController::class, 'tentangKami'])->name('tentang-kami');
Route::get('/login', [karyawanController::class, 'login'])->name('login');
Route::post('/logout', [karyawanController::class, 'logout'])->name('logout');
Route::post('/login/karyawan', [karyawanController::class, 'loginpost'])->name('login.post');
Route::get('/konsultasi', [pageUserController::class, 'konsultasi'])->name('konsultasi');
Route::post('/konsultasi/store', [KonsultasiController::class, 'store'])->name('konsultasi.store');
Route::get('/portofolio', [pageUserController::class, 'portofolio'])->name('portofolio');
Route::get('portofolio-desain', [pageUserController::class, 'portofolioDesain'])->name('portofolio-desain');
Route::get('portofolio-renovasi', [pageUserController::class, 'portofolioRenovasi'])->name('portofolio-renovasi');
Route::get('portofolio-bangunbaru', [pageUserController::class, 'portofolioBangunbaru'])->name('portofolio-bangunbaru');
Route::get('/portofolio-detail/{slug}', [pageUserController::class, 'portofolioDetail'])->name('portofolio-detail');
Route::middleware([AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/testimoni', [testimoniController::class, 'adminTestimoni'])->name('testimoni');
    Route::get('/proyek', [proyekController::class, 'adminProyek'])->name('proyek');
    Route::get('/tambah-proyek', [proyekController::class, 'adminTambahProyek'])->name('tambah-proyek');
    Route::post('/tambah-dokumentasi/{id}', [dokumentasiProyekController::class, 'store'])->name('store-dokumentasi');
    Route::delete('/delete-dokumentasi/{id}', [dokumentasiProyekController::class, 'destroy'])->name('destroy-dokumentasi');
    Route::post('/tambah-proyek', [proyekController::class, 'store'])->name('store-proyek');
    Route::get('/edit-proyek/{id}', [proyekController::class, 'adminEditProyek'])->name('edit-proyek');
    Route::put('/edit-proyek/{id}', [proyekController::class, 'update'])->name('update-proyek');
    Route::delete('/delete-proyek/{id}', [proyekController::class, 'destroy'])->name('destroy-proyek');
    Route::get('/tambah-testimoni', function () {
        return view('admin.tambah-testimoni');
    })->name('tambah-testimoni');
    Route::get('/edit-testimoni/{id}', [testimoniController::class, 'adminEditTestimoni'])->name('edit-testimoni');
    Route::put('/edit-testimoni/{id}', [testimoniController::class, 'update'])->name('update-testimoni');
    Route::post('/tambah-testimoni', [testimoniController::class, 'store'])->name('store-testimoni');
    Route::delete('/delete-testimoni/{id}', [testimoniController::class, 'destroy'])->name('destroy-testimoni');
    Route::get('edit-karyawan/{id}', [karyawanController::class, 'adminEditKaryawan'])->name('edit-karyawan');
    Route::put('/edit-karyawan/{id}', [karyawanController::class, 'update'])->name('update-karyawan');
    Route::get('/karyawan', [karyawanController::class, 'adminKaryawan'])->name('karyawan');
    Route::get('tambah-karyawan', function () {
        return view('admin.tambah-karyawan');
    })->name('tambah-karyawan');
    Route::post('/tambah-karyawan', [karyawanController::class, 'store'])->name('store-karyawan');
    Route::delete('/delete-karyawan/{id}', [karyawanController::class, 'destroy'])->name('destroy-karyawan');
    Route::get('/konsultasi', [KonsultasiController::class, 'adminKonsultasi'])->name('konsultasi');
    Route::delete('/konsultasi/{id}', [KonsultasiController::class, 'destroy'])->name('konsultasi.hapus');
    Route::get('/admin/konsultasi/{id}', [KonsultasiController::class, 'show'])->name('admin.konsultasi.lihat');
});
Route::post('/upload-image', function (Request $request) {
    $request->validate([
        'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $file = $request->file('upload');
    $filename = time() . '-' . $file->getClientOriginalName();
    $file->move(public_path('uploads/event'), $filename); // Simpan di public/uploads/event

    return response()->json([
        'url' => asset('uploads/event/' . $filename) // Kirim URL ke CKEditor
    ]);
});
