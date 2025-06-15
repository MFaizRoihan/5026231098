<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MinyakgorengController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CounterController;


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

Route::get('dosen', [DosenController::class,'index']);
Route::get('welcome', [DosenController::class,'welcome']);
Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// Route MinyakGorengDB
Route::get('/minyakgoreng', [MinyakgorengController::class, 'index']);
Route::get('/minyakgoreng/tambah', [MinyakgorengController::class, 'tambah']);
Route::post('/minyakgoreng/store', [MinyakgorengController::class, 'store']);
Route::get('/minyakgoreng/edit/{id}', [MinyakgorengController::class, 'edit']);
Route::post('/minyakgoreng/update', [MinyakgorengController::class, 'update']);
Route::get('/minyakgoreng/hapus/{id}', [MinyakgorengController::class, 'hapus']);
Route::get('/minyakgoreng/cari', [MinyakgorengController::class, 'cari']);

//route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/delete/{kodepegawai}', [KaryawanController::class, 'delete']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//route Karyawan2
Route::get('/karyawan2', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/delete/{kodepegawai}', [KaryawanController::class, 'delete']);
Route::get('/karyawan/cari', [KaryawanController::class, 'cari']);

//route Counter
Route::get('/counter', [CounterController::class, 'index']);
