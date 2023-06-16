<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function () {
    return view('layout/login');
});

Route::get('/daftar', function () {
    return view('layout/daftar');
});

Route::get('/unauthorized', [App\Http\Controllers\Auth\IntegratedController::class, 'unauthorized']);

Route::get('/signin', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::post('/signin', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/transaksi', [App\Http\Controllers\Auth\IntegratedController::class, 'indexTransaksi']);
Route::get('/', [App\Http\Controllers\Auth\IntegratedController::class, 'index']);
Route::get('/menu', [App\Http\Controllers\Auth\IntegratedController::class, 'index']);

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/tambahTransaksi/{id}', [App\Http\Controllers\Auth\TransaksiController::class, 'beli'])->name('transaksi.barang');
Route::post('/tambahTransaksi/{id}', [App\Http\Controllers\Auth\TransaksiController::class, 'store'])->name('proses.transaksi');

// Batas Autentifikasi
Route::get('/api/events', [App\Http\Controllers\Auth\EventController::class, 'index'])->name('api.events.index');
Route::post('/events', [App\Http\Controllers\Auth\EventController::class, 'store']);

Route::get('/barang', [App\Http\Controllers\Auth\BarangController::class, 'index']);
Route::post('/addBarang', [App\Http\Controllers\Auth\BarangController::class, 'store'])->name('tambah');
Route::post('/addKategori', [App\Http\Controllers\Auth\BarangController::class, 'storeKat'])->name('tambahKat');

Route::get('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'edit'])->name('barang.edit');
Route::put('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'update'])->name('barang.update');

Route::delete('/editBarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/transaksi', [App\Http\Controllers\Auth\TransaksiController::class, 'index']);

Route::get('/calendar', [App\Http\Controllers\Auth\ScheduleController::class, 'index'])->name('calendar.index');
Route::post('/calendar/add', [App\Http\Controllers\Auth\ScheduleController::class, 'index'])->name('calendar.store');

Route::get('/admin', [App\Http\Controllers\Auth\RegisterController::class, 'indexAdmn']);

Route::get('/daftarAdmin', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
Route::post('/daftarAdmin', [App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'edit'])->name('admin.edit');
Route::put('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'update'])->name('admin.update');

Route::delete('/updateAdmin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'destroy'])->name('admin.destroy');

Route::get('/logbarang',[App\Http\Controllers\Auth\BarangController::class, 'tampillog']);
Route::delete('/logbarang/{id}', [App\Http\Controllers\Auth\BarangController::class, 'destroylog'])->name('log.destroy');
?>