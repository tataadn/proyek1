<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guru\Auth\RegisteredUserController;
use App\Http\Controllers\Guru\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Guru\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Guru\Auth\VerifyEmailController;
use App\Http\Controllers\Guru\Auth\EmailVerificationNotificationController;

use App\Http\Controllers\GuruController;

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
            //route dashboard Guru
            Route::get('/dashboard', [GuruController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

            //route profile Guru
            Route::get('profile', [GuruController::class, 'profile'])->middleware(['auth'])->name('profil');
            Route::get('/editprofile/{id}', [GuruController::class,'editprofile'])->middleware(['auth'])->name('editprofile');
            Route::put('/edit/{id}', [GuruController::class,'update'])->middleware(['auth'])->name('update');

            //route data guru
            Route::get('/data-guru', [GuruController::class, 'dataGuru'])->middleware(['auth'])->name('dataGuru');
            Route::get('/data-guru/{id}', [GuruController::class, 'deleteGuru'])->middleware(['auth'])->name('deleteGuru');
            
            //route data siswa
            Route::get('/datasiswa', [GuruController::class,'datasiswa'])->middleware(['auth'])->name('datasiswa');
            Route::get('/datasiswa/{id}', [GuruController::class,'delete'])->middleware(['auth'])->name('delete');
            Route::get('/data-mipa1', [GuruController::class,'datamipa1'])->middleware(['auth'])->name('datamipa1');
            Route::get('/data-mipa2', [GuruController::class,'datamipa2'])->middleware(['auth'])->name('datamipa2');
            Route::get('/data-ips1', [GuruController::class,'dataips1'])->middleware(['auth'])->name('dataips1');
            Route::get('/data-ips2', [GuruController::class,'dataips2'])->middleware(['auth'])->name('dataips2');

            //route absensi
            Route::get('/absensisiswa', [GuruController::class,'absensi'])->middleware(['auth'])->name('absensisiswa');
            Route::get('/absensi-mipa1', [GuruController::class,'absensimipa1'])->middleware(['auth'])->name('absensimipa1');
            Route::get('/absensi-mipa2', [GuruController::class,'absensimipa2'])->middleware(['auth'])->name('absensimipa2');
            Route::get('/absensi-ips1', [GuruController::class,'absensiips1'])->middleware(['auth'])->name('absensiips1');
            Route::get('/absensi-ips2', [GuruController::class,'absensiips2'])->middleware(['auth'])->name('absensiips2');
            
            //route export
            Route::get('/exportmipa1', [GuruController::class,'exportmipa1'])->middleware(['auth'])->name('exportmipa1');
            Route::get('/exportmipa2', [GuruController::class,'exportmipa2'])->middleware(['auth'])->name('exportmipa2');
            Route::get('/exportips1', [GuruController::class,'exportips1'])->middleware(['auth'])->name('exportips1');
            Route::get('/exportips2', [GuruController::class,'exportips2'])->middleware(['auth'])->name('exportips2');
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
            Route::post('/store', [SiswaController::class,'store'])->middleware(['auth'])->name('store');
            Route::get('/history', [SiswaController::class,'history'])->middleware(['auth'])->name('history');
            Route::get('/editprofile/{id}', [SiswaController::class,'editprofile'])->middleware(['auth'])->name('editprofile');
            Route::put('/edit/{id}', [SiswaController::class,'update'])->middleware(['auth'])->name('update');
        });
    });
});

// Route::get('/verifikasi', function () {
//     return view('verifikasi');
// });