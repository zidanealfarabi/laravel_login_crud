<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('berita',[BeritaController::class,'index']);
Route::post('berita/tambah',[BeritaController::class,'tambah']);
Route::post('berita/hapus',[BeritaController::class,'hapus']);
Route::post('berita/edit',[BeritaController::class,'edit']);

Route::get('kontak',[KontakController::class,'index']);
Route::post('kontak/tambah',[KontakController::class,'tambah']);
Route::post('kontak/hapus',[KontakController::class,'hapus']);
Route::post('kontak/edit',[KontakController::class,'edit']);

Route::get('biodata',[BiodataController::class,'index']);
Route::post('biodata/tambah',[BiodataController::class,'tambah']);
Route::post('biodata/hapus',[BiodataController::class,'hapus']);
Route::post('biodata/edit',[BiodataController::class,'edit']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
