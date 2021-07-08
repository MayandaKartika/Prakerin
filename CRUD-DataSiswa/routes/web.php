<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriSiswaController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kategori', [KategoriSiswaController::class, 'index'])->name('kategori.index');
Route::post('/kategori/create', [KategoriSiswaController::class, 'store'])->name('kategori.store');
Route::get('/kategori/create', [KategoriSiswaController::class, 'create'])->name('kategori.create');
Route::patch('/kategori/{id}/edit', [KategoriSiswaController::class, 'update'])->name('kategori.edit');
Route::get('/kategori/{id}/edit', [KategoriSiswaController::class, 'edit'])->name('kategori.edit');
Route::delete('/kategori/{id}', [KategoriSiswaController::class, 'destroy'])->name('kategori.destroy');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::post('/siswa/create', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::patch('/siswa/{id}/edit', [SiswaController::class, 'update'])->name('siswa.edit');
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');