<?php

use Illuminate\Support\Facades\Route;
//panggil controller SensorLaravel
use App\Http\Controllers\SensorLaravel;

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
    return view('monitoring');
});

// route untuk baca kelembaban
Route::get('/bacakelembaban', [SensorLaravel::class, 'bacakelembaban']);
//route untuk baca volume
Route::get('/bacavolume', [SensorLaravel::class, 'bacavolume']);

// route untuk menyimpan nilai sensor ke tb_sensor
Route::get('/simpan/{nilaikelembaban}/{nilaivolume}', [SensorLaravel::class, 'simpansensor']);
