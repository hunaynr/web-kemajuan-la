<?php

use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Route untuk Panitia
|--------------------------------------------------------------------------
*/
Route::get('/panitia', function () {
    return view('panitia.dashboard');
});

/*
|--------------------------------------------------------------------------
| Route untuk Mahasiswa
|--------------------------------------------------------------------------
*/
Route::get('/mahasiswa', function () {
    return view('mahasiswa.dashboard');
});

/*
|--------------------------------------------------------------------------
| Route untuk Dosen
|--------------------------------------------------------------------------
*/
Route::get('/dosen', function () {
    return view('dosen.dashboard');
});


/*
|--------------------------------------------------------------------------
| Route untuk Login
|--------------------------------------------------------------------------
*/
Route::get('/', function() {
    return view('welcome');
});