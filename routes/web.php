<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\AdminController;

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
Route::get('/', fn() => view('home'));
Route::get('home', fn() => view('home'));
Route::get('contact', fn() => view('contact'));
Route::get('profil', fn() => view('profil'));
Route::get('berita', fn() => view('berita'));

Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.form');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// AUTH ADMIN ROUTES
Route::get('login_admin', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('login_admin', [AdminController::class, 'login'])->name('admin.login.submit');

Route::get('register_admin', [AdminController::class, 'showRegister'])->name('admin.register');
Route::post('register_admin', [AdminController::class, 'register'])->name('admin.register.submit');

// Hanya admin login yang bisa akses ini
Route::get('home_admin', function () {
    return view('halaman_admin.home_admin');
})->middleware('admin.auth');

// Route untuk data pendaftaran yang hanya bisa diakses oleh admin
Route::get('admin/pendaftaran', [AdminController::class, 'dataPendaftaran'])->middleware('admin.auth')->name('admin.pendaftaran');

// Route untuk menghapus data pendaftaran
Route::delete('admin/pendaftaran/{id}', [AdminController::class, 'destroy'])->middleware('admin.auth')->name('pendaftaran.destroy');

Route::get('home_admin', [AdminController::class, 'dashboard'])->middleware('admin.auth')->name('admin.dashboard'); 

// Route untuk logout admin
Route::post('logout', function () {
    Auth::logout();
    session()->flush();
    return redirect('login_admin');
})->name('logout');