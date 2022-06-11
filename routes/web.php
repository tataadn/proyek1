<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\Auth\RegisteredUserController;
use App\Http\Controllers\Guru\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Guru\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Guru\Auth\VerifyEmailController;
use App\Http\Controllers\Guru\Auth\EmailVerificationNotificationController;

use App\Http\Controllers\Guru\Auth\GuruController;

use App\Http\Controllers\Siswa\Auth\RegisteredUserControllers;
use App\Http\Controllers\Siswa\Auth\AuthenticatedSessionControllers;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/verify-success', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//halaman Guru

Route::namespace('Guru', )->prefix('guru')->name('guru.')->group(function () {
    Route::namespace('Auth')->group(function () {
        //login Guru
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('guruLogin');

        //register Guru
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store'])->name('guruRegister');

        //Halaman Guru
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/dashboard', function () {
                return view('guru.dashboard');
            })->middleware(['auth'])->name('dashboard');
    
            Route::get('profile', function () {
                return view('guru.profile');
            })->middleware(['auth'])->name('profil');
    
            Route::get('/datasiswa', function () {
                return view('guru.datasiswa');
            })->middleware(['auth'])->name('datasiswa');
    
            Route::get('/absensisiswa', function () {
                return view('guru.absensi');
            })->middleware(['auth'])->name('absensisiswa');
        });
    });
});

Route::namespace('Siswa')->prefix('siswa')->name('siswa.')->group(function () {
    Route::namespace('Auth')->group(function () {
        //login siswa
        Route::get('login', [AuthenticatedSessionControllers::class, 'create'])->name('login');
        Route::post('login', [AuthenticatedSessionControllers::class, 'store'])->name('siswaLogin');

        //register siswa
        Route::get('register', [RegisteredUserControllers::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserControllers::class, 'store'])->name('siswaRegister');

        //Halaman Siswa
        Route::middleware(['auth', 'verified'])->group(function () {
            Route::get('/dashboard', [SiswaController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
            Route::get('/profile', [SiswaController::class,'profile'])->middleware(['auth'])->name('profile');
            Route::get('/absensi', [SiswaController::class,'absensi'])->middleware(['auth'])->name('absensi');
            Route::get('/history', [SiswaController::class,'history'])->middleware(['auth'])->name('history');
        });
    });
});

// Route::get('/verifikasi', function () {
//     return view('verifikasi');
// });