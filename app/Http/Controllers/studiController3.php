<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studiController3 extends Controller
{
    function index(){
        // Filter data yang nama wali kelasnya diawali huruf 'A' dan urutkan berdasarkan 'nama_wali_kelas'
        $studi = DB::table('table_kelas')
                    ->where('nama_wali_kelas','LIKE', 'A%')
                    ->orderBy('nama_wali_kelas', 'ASC')
                    ->get();
        return view('kelas', compact('studi'));
    }
}
