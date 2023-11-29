<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;


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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/barang', [BarangController::class, 'index']);
// Route::get('/tambahBarang', [BarangController::class, 'store']);


// Route::get('/kasir', [KasirController::class, 'index']);


Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/{id}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{KodeBarang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{KodeBarang}', [BarangController::class, 'destroy'])->name('barang.destroy');


Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');


Route::get('/tenan', [TenanController::class, 'index'])->name('tenan.index');