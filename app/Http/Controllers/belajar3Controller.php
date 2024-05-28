<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajar3Controller extends Controller
{
    function index3(){
        $nama = "fitri";
        $kelas = "XI TOI 2";
        $JK = "Perempuan";
        return view('belajar3', compact('nama', 'kelas', 'JK'));
    }
}
