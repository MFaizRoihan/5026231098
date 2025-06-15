<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        // Mengambil data seluruh karyawan
        $karyawan = DB::table('karyawan')->paginate(10);  // Menggunakan pagination untuk 10 data per halaman
        return view('indexkaryawan', ['karyawan' => $karyawan]);
    }

    // Menampilkan form tambah data karyawan
    public function tambah()
    {
        return view('tambahkaryawan');
    }

    // Menyimpan data karyawan yang baru ditambahkan
    public function store(Request $request)
    {
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => strtoupper($request->namalengkap), // Mengubah nama menjadi huruf kapital
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen), // Mengubah departemen menjadi huruf kecil
        ]);

        return redirect('/karyawan'); // Redirect ke halaman index setelah data disimpan
    }

    // Menghapus data karyawan berdasarkan kodepegawai
    public function delete($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete(); // Hapus data berdasarkan kodepegawai
        return redirect('/karyawan'); // Redirect ke halaman index setelah data dihapus
    }

    // Fungsi pencarian data karyawan
 public function cari(Request $request)
{
    $cari = $request->cari;

    $karyawan = DB::table('karyawan')
        ->where('namalengkap', 'like', "%{$cari}%")
        ->orWhere('divisi',      'like', "%{$cari}%")
        ->orWhere('departemen',  'like', "%{$cari}%")
        ->paginate(10)
        ->appends(['cari' => $cari]);

    return view('indexkaryawan', [
        'karyawan' => $karyawan,
        'cari'     => $cari,
    ]);
}
}
