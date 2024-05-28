<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajar2Controller extends Controller
{
    function index2(){
        $nama = "siti";
        $kelas = "XI TKJ 2";
        $JK = "laki-laki";
        return view('belajar2', compact('nama', 'kelas', 'JK'));
    }
}
