<?php

use App\Http\Controllers\DashboardController;
use App\Models\pelayanan;
use App\Http\Controllers\home;
use App\Http\Controllers\ImageGalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KabarDesaController;
use App\Http\Controllers\pelayananController;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Models\perangkatDesa;

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

Route::get('/dashboard/profil-desa/gambaran-umum', [ProfilDesaController::class, 'showGambaranUmum'])->name('profil-desa.gambaran-umum');
Route::get('/dashboard/profil-desa/sejarah', [ProfilDesaController::class, 'showSejarah'])->name('profil-desa.sejarah');
Route::get('/dashboard/profil-desa/demografi', [ProfilDesaController::class, 'showDemografi'])->name('profil-desa.demografi');
Route::get('/dashboard/profil-desa/visi-misi', [ProfilDesaController::class, 'showVisiMisi'])->name('profil-desa.visi-misi');
Route::get('/dashboard/profil-desa/perangkat-desa', [ProfilDesaController::class, 'showPerangkatDesa'])->name('profil-desa.perangkat-desa');
Route::get('/dashboard/profil-desa/lembaga', [ProfilDesaController::class, 'showLembaga'])->name('profil-desa.lembaga');

// Route::get('/dashboard/profil-desa', [ProfilDesaController::class, 'show'])->middleware('auth');
// Route::get('/dashboard/kabar-desa/{slug}', [KabarDesaController::class, 'showSingleKabarDesa'])->name('dashboard-single-kabar-desa');
Route::get('/dashboard/kabar-desa/CreateSlug', [KabarDesaController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/kabar-desa', KabarDesaController::class)->middleware('auth');
Route::post('image-perangkat', [PerangkatDesaController::class, 'upload'])->middleware('auth', 'verified')->name('upload-perangkat');
Route::delete('image-perangkat/{id}', [PerangkatDesaController::class, 'destroy'])->middleware('auth', 'verified')->name('destroy-perangkat');

Route::post('image-gallery', [ImageGalleryController::class, 'upload'])->middleware('auth', 'verified')->name('upload-galeri');
Route::delete('image-gallery/{id}', [ImageGalleryController::class, 'destroy'])->middleware('auth', 'verified')->name('destroy-galeri');
Route::get('/dashboard/galeri', [ImageGalleryController::class, 'index'])->middleware('auth', 'verified')->name('dashboard-galeri');
Route::get('/kabar-desa/{slug}', [home::class, 'show'])->name('skabar-desa');
Route::get('/', [home::class, 'index'])->name('home');
Route::get('/search', [DashboardController::class, 'search'])->name('search');
Route::get('/profil-desa', [PerangkatDesaController::class, 'index'])->name('profil-desa');
Route::get('/pelayanan', [pelayananController::class, 'index'])->name('pelayanan');
Route::get('/kabar-desa', [home::class, 'kabardesa'])->name('kabar-desa');
Route::get('/galeri-desa', [ImageGalleryController::class, 'p_index'])->name('galeri-desa');

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth', 'verified')->name('dashboard');


Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);


// Route::get('/dashboard/profil-desa/{profilDesa}', [ProfilDesaController::class, 'show'])->name('profil-desa');
