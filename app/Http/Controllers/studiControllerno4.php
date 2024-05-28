<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class studiControllerno4 extends Controller
{
    function index(){
        // Filter data yang nama wali kelasnya diawali huruf 'A' dan urutkan berdasarkan 'nama_wali_kelas'
        $studi = DB::table('table_kelas')
                    ->where('jurusan', 'RPL')
                    ->orderBy('jurusan', 'asc')
                    ->get();
        return view('kelas2', compact('studi'));
    }
}
