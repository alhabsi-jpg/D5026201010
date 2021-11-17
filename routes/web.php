<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
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
