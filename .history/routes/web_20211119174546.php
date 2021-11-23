<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [TransaksiController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('/produk/produks', ProdukController::class)->middleware('auth');

Route::get('/data_admin', [AdminController::class, 'index']);

Route::resource('/transaksi/posts', TransaksiController::class)->middleware('auth');
