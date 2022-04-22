<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('siswa/index');
});

Route::get('/siswa-profile', function () {
    return view('siswa/profile');
});

Route::get('/siswa-absen', function () {
    return view('siswa/absen');
});

Route::get('/siswa-history', function () {
    return view('siswa/history');
});
