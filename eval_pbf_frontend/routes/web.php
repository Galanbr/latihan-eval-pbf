<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect('/dosen');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);
Route::post('/dosen', [DosenController::class, 'store']);
Route::get('/dosen/{nidn}/edit', [DosenController::class, 'edit']);
Route::put('/dosen/{nidn}', [DosenController::class, 'update']);
Route::delete('/dosen/{nidn}', [DosenController::class, 'delete']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{nim}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'delete']);
