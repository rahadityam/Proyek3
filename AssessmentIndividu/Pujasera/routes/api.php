<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('barang', [BarangController::class, 'index']);
Route::get('barang/{id}', [BarangController::class, 'show']);
Route::post('barang', [BarangController::class, 'store']);
Route::put('barang/{id}', [BarangController::class, 'update']);
Route::delete('barang/{id}', [BarangController::class, 'destroy']);


Route::get('kasir', [KasirController::class, 'index']);
Route::get('kasir/{id}', [KasirController::class, 'show']);
Route::post('kasir', [KasirController::class, 'store']);