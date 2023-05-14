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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('layout/login');
});

Route::get('/daftar', function () {
    return view('layout/daftar');
});

Route::get('/menu', function () {
    return view('layout/menu');
});

Route::get('/jadwal', function () {
    return view('layout/jadwal');
});

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/signin', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/signin', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/barang', [App\Http\Controllers\Auth\BarangController::class, 'index']);
Route::get('/addBarang', [App\Http\Controllers\Auth\BarangController::class, 'create']);
Route::post('/addBarang', [App\Http\Controllers\Auth\BarangController::class, 'store']);