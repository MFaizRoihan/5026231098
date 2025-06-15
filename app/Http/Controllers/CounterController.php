<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CounterController extends Controller
{
    public function index()
    {
        // tambah 1 ke jumlah
        DB::table('pagecounter')->where('id', 1)->increment('jumlah');

        // ambil jumlah terbaru
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

        // tampilkan ke view
        return view('indexcounter', ['jumlah' => $jumlah]);
    }
}
