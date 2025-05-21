<?php

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

Route::view('/pertemuan1', 'pertemuan1');
Route::view('/pertemuan3', 'pertemuan3');
Route::view('/clonelinktree', 'clonelinktree');
Route::view('/pertemuan7-js1', 'pertemuan7-js1');
Route::view('/pertemuan7-js2', 'pertemuan7-js2');
Route::view('/danantara', 'danantara');
Route::view('/ets', 'ets');
Route::view('/frontend', 'frontend');

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});
