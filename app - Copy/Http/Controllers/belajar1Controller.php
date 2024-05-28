<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajar1Controller extends Controller
{
    function index1() {
        $nama = "imas";
        $kelas = "XI RPL 1";
        $JK = "laki-laki";
        return view('belajar1', compact('nama', 'kelas', 'JK'));
    }
}
