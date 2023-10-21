<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contoh', function () {
//     echo 'Ini halaman contoh';
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/mahasiswa/{npm}', [MahasiswaController::class, 'view']);
Route::get('/siswa', [SiswaController::class, "siswa"]);
Route::get('/buku', [BukuController::class, "buku"]);