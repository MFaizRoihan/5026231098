<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {
        $data = DB::table('newkaryawan')->get();
        return view('newkaryawan', ['newkaryawan' => $data]);
    }

    public function tambah()
    {
        return view('tambahkaryawan2');
    }

    public function store(Request $request)
    {
        // Validasi manual NIP unik
        $exists = DB::table('newkaryawan')->where('NIP', $request->NIP)->exists();
        if ($exists) {
            return back()->with('error', 'NIP sudah terdaftar. Gunakan NIP lain.');
        }

        DB::table('newkaryawan')->insert([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);

        return redirect('/eas')->with('success', 'Data berhasil disimpan.');
    }

    public function hapus($NIP)
    {
        DB::table('newkaryawan')->where('NIP', $NIP)->delete();
        return redirect('/eas')->with('success', 'Data berhasil dihapus.');
    }
}
