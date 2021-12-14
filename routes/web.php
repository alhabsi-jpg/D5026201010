<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\SepedamotorController;
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

Route::get('tugas', function () {
    return view('tugas4');
});

Route::get('praktikum2', function () {
    return view('praktikum2');
});
Route::get('ets', [ViewController::class, 'uts1']);
Route::get('tugashtml5', [ViewController::class, 'tugas5html']);
Route::post('tugasphp5', [ViewController::class, 'tugas5php']);
//route databse pegawai
Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);
//route databse tugas
Route::get('tugas', [TugasController::class, 'index']);
Route::get('/tugas/tambah',[TugasController::class, 'tambah']);
Route::post('/tugas/store',[TugasController::class, 'store']);
Route::get('/tugas/edit/{id}',[TugasController::class, 'edit']);
Route::post('/tugas/update',[TugasController::class, 'update']);
Route::get('/tugas/hapus/{id}',[TugasController::class, 'hapus']);
//route databse pengurus
Route::get('pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus/tambah',[PengurusController::class, 'tambah']);
Route::post('/pengurus/store',[PengurusController::class, 'store']);
Route::get('/pengurus/edit/{id}',[PengurusController::class, 'edit']);
Route::post('/pengurus/update',[PengurusController::class, 'update']);
Route::get('/pengurus/hapus/{id}',[PengurusController::class, 'hapus']);
//route database absen
Route::get('absen', [AbsenController::class, 'index']);
Route::get('/absen/tambah',[AbsenController::class, 'tambah']);
Route::post('/absen/store',[AbsenController::class, 'store']);
Route::get('/absen/edit/{id}',[AbsenController::class, 'edit']);
Route::post('/absen/update',[AbsenController::class, 'update']);
Route::get('/absen/hapus/{id}',[AbsenController::class, 'hapus']);
//route database sepedamotor
Route::get('sepedamotor', [SepedamotorController::class, 'index']);
Route::get('/sepedamotor/tambah',[SepedamotorController::class, 'tambah']);
Route::post('/sepedamotor/store',[SepedamotorController::class, 'store']);
Route::get('/sepedamotor/edit/{id}',[SepedamotorController::class, 'edit']);
Route::post('/sepedamotor/update',[SepedamotorController::class, 'update']);
Route::get('/sepedamotor/hapus/{id}',[SepedamotorController::class, 'hapus']);






