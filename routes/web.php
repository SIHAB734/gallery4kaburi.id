<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KategoriController;

/*
|----- AUTH -----
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('login');   // GET /login
    Route::post('/login', 'login')->name('login.perform'); // POST /login (optional name)
    Route::get('/register', 'showRegister')->name('register');
    Route::post('/register', 'register')->name('register.perform');
    Route::post('/logout', 'logout')->name('logout');   // POST /logout
    Route::get('/upload', [GaleriController::class, 'create'])->name('upload.form');
Route::post('/upload', [GaleriController::class, 'store'])->name('upload.store');

});

/*
|----- FRONTEND -----
*/
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/tentang-sekolah', 'tentang')->name('tentang');
    Route::get('/visi-misi', 'visimisi')->name('visimisi');
    Route::get('/prestasi', 'prestasi')->name('prestasi');
    Route::get('/guru-dan-staf', 'guru')->name('guru');
    Route::get('/fasilitas', 'fasilitas')->name('fasilitas');

    // program
    Route::get('/pplg', 'pplg')->name('pplg');
    Route::get('/tkj', 'tkj')->name('tkj');
    Route::get('/to', 'to')->name('to');
    Route::get('/tp', 'tp')->name('tp');

    // galeri listing/detail
    Route::get('/foto', 'foto')->name('foto');
    Route::get('/video', 'video')->name('video');
    Route::get('/galeri/{id}', 'show')->name('galeri.show');

    // kesiswaan
    Route::get('/osis-mpk', 'osis')->name('osis');
    Route::get('/ekstrakurikuler', 'eskul')->name('eskul');

    // informasi
    Route::get('/berita', 'berita')->name('berita');
    Route::get('/pengumuman', 'pengumuman')->name('pengumuman');
    Route::get('/agenda', 'agenda')->name('agenda');
});

/*
|----- ADMIN -----
*/
Route::prefix('admin')
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('galeri', GaleriController::class);
        Route::resource('kategori', KategoriController::class);
    });

Route::redirect('/dashboard', '/admin')->middleware('auth');
