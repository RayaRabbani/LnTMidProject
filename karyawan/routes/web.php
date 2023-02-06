<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Karyawan;
use App\Http\Controllers\Login;
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


Route::get('/',[Karyawan::class, 'index'])->name('datakaryawan');
Route::get('/datakaryawan',[Karyawan::class, 'index'])->name('datakaryawan');

Route::get('/datakaryawan/tambah',[Karyawan::class, 'tambah'])->name('datakaryawan');
Route::post('/datakaryawan/store',[Karyawan::class, 'store'])->name('datakaryawan');
Route::get('/datakaryawan/edit/{id}',[Karyawan::class, 'edit'])->name('datakaryawan');
Route::post('/datakaryawan/update',[Karyawan::class, 'update']);
Route::get('/datakaryawan/hapus/{id}',[Karyawan::class, 'hapus']);


