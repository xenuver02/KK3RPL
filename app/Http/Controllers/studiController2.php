<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studiController2 extends Controller
{
    function index(){
        $studi = DB::table('table_kelas')->get();
        return view('studi', compact('studi'));
    }
}
