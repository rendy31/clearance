<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\tahunakademikController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index']);
Route::post('proses_login', [AuthController::class, 'authenticate']);

Route::get('/homeAdmin', [homeController::class, 'index'])->name('homeAdmin');

Route::resource('prodi', prodiController::class);
Route::resource('mahasiswa', mahasiswaController::class);
Route::resource('tahunakademik', tahunakademikController::class);