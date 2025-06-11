<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinyakgorengController extends Controller
{
    public function index()
    {
        // mengambil data dari table minyakgoreng
        // untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
        // paginate(10) artinya kita akan menampilkan 10 data per halaman
        // jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        $minyakgoreng = DB::table('minyakgoreng')->paginate(10);

        // mengirim data minyakgoreng ke view index
        return view('indexminyakgoreng',['minyakgoreng' => $minyakgoreng]);
    }

    // method untuk menampilkan view form tambah minyakgoreng
    public function tambah(){
        // memanggil view tambah
        return view('tambahminyakgoreng');
    }

    // method untuk insert data ke table minyakgoreng
    public function store(Request $request)
    {
        // insert data ke table minyakgoreng
        DB::table('minyakgoreng')->insert([
            'merkminyakgoreng' => $request->merk,
            'hargaminyakgoreng' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // alihkan halaman ke halaman minyakgoreng
        return redirect('/minyakgoreng');
    }

    // method untuk edit data minyakgoreng
    public function edit($id)
    {
        // Mengambil data minyak goreng berdasarkan ID
        $minyakgoreng = DB::table('minyakgoreng')->where('ID', $id)->first();

        // Mengirim data minyak goreng yang ditemukan ke view editminyakgoreng
        return view('editminyakgoreng', ['minyakgoreng' => $minyakgoreng]);
    }

    // update data minyakgoreng
    public function update(Request $request)
    {
        // update data minyakgoreng
        DB::table('minyakgoreng')->where('ID', $request->id)->update([
            'merkminyakgoreng' => $request->merk,
            'hargaminyakgoreng' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // alihkan halaman ke halaman minyakgoreng
        return redirect('/minyakgoreng');
    }

    // method untuk hapus data minyakgoreng
    public function hapus($id)
    {
        // menghapus data minyakgoreng berdasarkan id yang dipilih
        DB::table('minyakgoreng')->where('ID', $id)->delete();

        // alihkan halaman ke halaman minyakgoreng
        return redirect('/minyakgoreng');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table minyakgoreng sesuai pencarian data
        $minyakgoreng = DB::table('minyakgoreng')
            ->where('merkminyakgoreng', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data minyakgoreng ke view index
        return view('indexminyakgoreng', ['minyakgoreng' => $minyakgoreng]);
    }
}
