<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'add'])->name('mahasiswa.add');
Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
