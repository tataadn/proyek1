<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Routes for Siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa-profile', [SiswaController::class, 'profile']);
Route::get('/siswa-absen', [SiswaController::class, 'absen']);
Route::get('/siswa-history', [SiswaController::class, 'history']);

//Routes for Guru
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru-profile', [GuruController::class, 'profile']);
Route::get('/guru-data', [GuruController::class, 'datasiswa']);
Route::get('/guru-absensi', [GuruController::class, 'absensi']);
Route::get('/guru-rekap', [GuruController::class, 'rekap']);