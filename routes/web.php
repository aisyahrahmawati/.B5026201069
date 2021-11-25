<?php

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

Route::get('praktikum_1', function () {
    return view('praktikum_1'); //kalau sudah connect model, cara ini tidak bisa
});

//ulangi cara di atas untuk Tugas 4
Route::get('tugas_4', function () {
    return view('tugas_4'); //kalau sudah connect model, cara ini tidak bisa
});

//cara ketiga
Route::get('praktikum_2', 'ViewController@showPraktikum2');

//ulangi cara ini untuk link ETS dan Tugas PHP
Route::get('etspwebb', 'ViewController@showETSPWEBB');

Route::get('show', 'ViewController@showForm');

Route::post('tugasphp','ViewController@rentalfunc');
