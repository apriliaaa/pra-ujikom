<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\SimpanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('kasir/index', [KasirController::class, "index"])->name('data-kasir');
Route::get('kasir/create', [KasirController::class, "create"])->name('tambah-kasir');
Route::get('kasir/edit{kodeksr}', [KasirController::class, "edit"])->name('edit-kasir');
Route::post('kasir/store', [KasirController::class, "store"])->name('simpan-kasir');
Route::post('kasir/update{kodeksr}', [KasirController::class, "update"])->name('update-kasir');
Route::delete('kasir/destroy{kodeksr}', [KasirController::class, "destroy"])->name('delete-kasir');

Route::get('anggota/index', [AnggotaController::class, "index"])->name('data-anggota');
Route::get('anggota/create', [AnggotaController::class, "create"])->name('tambah-anggota');
Route::get('anggota/edit{no_anggota}', [AnggotaController::class, "edit"])->name('edit-anggota');
Route::post('anggota/store', [AnggotaController::class, "store"])->name('simpan-anggota');
Route::post('anggota/update{no_anggota}', [AnggotaController::class, "update"])->name('update-anggota');
Route::delete('anggota/destroy{no_anggota}', [AnggotaController::class, "destroy"])->name('delete-anggota');

Route::get('simpan/index', [SimpanController::class, "index"])->name('data-simpan');
Route::get('simpan/create', [SimpanController::class, "create"])->name('tambah-simpan');
Route::get('simpan/edit{no_simpan}', [SimpanController::class, "edit"])->name('edit-simpan');
Route::post('simpan/store', [SimpanController::class, "store"])->name('simpan-simpan');
Route::post('simpan/update{no_simpan}', [SimpanController::class, "update"])->name('update-simpan');
Route::delete('simpan/destroy{no_simpan}', [SimpanController::class, "destroy"])->name('delete-simpan');

Route::get('pinjam/index', [PinjamController::class, "index"])->name('data-pinjam');
Route::get('pinjam/create', [PinjamController::class, "create"])->name('tambah-pinjam');
Route::get('pinjam/edit{no_pinjam}', [PinjamController::class, "edit"])->name('edit-pinjam');
Route::post('pinjam/store', [PinjamController::class, "store"])->name('simpan-pinjam');
Route::post('pinjam/update{no_pinjam}', [PinjamController::class, "update"])->name('update-pinjam');
Route::delete('pinjam/destroy{no_pinjam}', [PinjamController::class, "destroy"])->name('delete-pinjam');