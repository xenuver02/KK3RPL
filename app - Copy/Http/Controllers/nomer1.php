<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class nomer1 extends Controller
{
    function index(){
        $siswa = DB::table('table_kelas')->orderBy('lokasi_ruangan', 'ASC')->get();
        return view('nomer1', compact('siswa'));
    }
    function create(){
        return view('siswa/kelas');
    }
    function store(Request $request) {
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('table_kelas')->insert($input);
        if ($status) {
            return redirect('/siswa')->with('susccess', 'Data berhasil ditambahkan');
        }else{
            return redirect('/siswa/create')->with('error', 'Data gagal ditambahkan');
        }
    }
}
