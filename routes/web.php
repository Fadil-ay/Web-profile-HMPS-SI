<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\data_CAController;
use App\Http\Controllers\admin\DataCaController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini route aplikasi kamu didaftarkan.
|
*/

// Halaman utama
Route::get('/', function () {
    return view('Ca.index');
});

// Auth Admin
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Pendaftaran CA (user)
Route::get('/pendaftaran', [data_CAController::class, 'create'])->name('data_ca.create');
Route::post('/pendaftaran', [data_CAController::class, 'store'])->name('data_ca.store');


// Admin Area (hanya setelah login)
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {

    // Data Calon Anggota
    Route::get('/data-ca', [DataCaController::class, 'index'])->name('admin.data_ca.index');
    Route::get('/data-ca/{id}/edit', [DataCaController::class, 'edit'])->name('admin.data_ca.edit');
    Route::post('/data-ca/{id}/update', [DataCaController::class, 'update'])->name('admin.data_ca.update');
    Route::get('/admin/data_ca/cetak', [DataCaController::class, 'cetak'])->name('admin.data_ca.cetak');
    Route::delete('/data-ca/{id}', [DataCaController::class, 'destroy'])->name('admin.data_ca.destroy');
});
