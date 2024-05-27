<?php

use App\Http\Controllers\SupplierControler;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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



Route::resource('Data_suppliers', SupplierControler::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/proses_login', [LoginController::class, 'proses_login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register_action', [RegisterController::class, 'action_register']);

Route::post('/cari_kategori', [SupplierControler::class, 'kategori']);
Route::get('/cetak_pdf', [SupplierControler::class, 'cetak_pdf']);