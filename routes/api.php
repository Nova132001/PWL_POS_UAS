<?php

//use App\Http\Controllers\Api\RegisterController;

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\api\PenjualanController;
use App\Http\Controllers\api\TransaksiController;
use App\Http\Controllers\Api\UserController;

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

Route::post('register',\App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('register1',\App\Http\Controllers\Api\RegisterController::class)->name('register1');
Route::post('/login', \App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});

Route::post('logout', \App\Http\Controllers\Api\LogoutController::class)->name('logout');
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::get('user', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);

Route::get('kategoris', [KategoriController::class, 'index']);
Route::post('kategoris', [KategoriController::class, 'store']);
Route::get('kategoris/{kategori}', [KategoriController::class, 'show']);
Route::put('kategoris/{kategori}', [KategoriController::class, 'update']);
Route::delete('kategoris/{kategori}', [KategoriController::class, 'destroy']);

Route::get('barangs', [BarangController::class, 'index']);
Route::post('barangs', [BarangController::class, 'store']);
Route::get('barangs/{barang}', [BarangController::class, 'show']);
Route::put('barangs/{barang}', [BarangController::class, 'update']);
Route::delete('barangs/{barang}', [BarangController::class, 'destroy']);

Route::get('penjualans', [PenjualanController::class, 'index']);
Route::post('penjualans', [PenjualanController::class, 'store']);
Route::get('penjualans/{penjualan}', [PenjualanController::class, 'show']);
Route::put('penjualans/{penjualan}', [PenjualanController::class, 'update']);
Route::delete('penjualans/{penjualan}', [PenjualanController::class, 'destroy']);

Route::get('transaksi', [TransaksiController::class, 'index']);
Route::post('transaksi', [TransaksiController::class, 'store']);
Route::get('tarnsaksi/{transaksi}', [TransaksiController::class, 'show']);
Route::put('transaksi/{transaksi}', [TransaksiController::class, 'update']);
Route::delete('transaksi/{transaksi}', [TransaksiController::class, 'destroy']);