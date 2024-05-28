<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    function index(){
        $siswa = DB::table('table_siswa')->orderBy('nama_lengkap', 'asc')->get();
        return view('belajar', compact('siswa'));
    }
    function create() {
        return view('siswa.form');
    }
    function store(Request $request) {
        $input = $request->all();
        unset($input['_token']);
        $status = DB::table('table_siswa')->insert($input);
        if ($status) {
            return redirect('/siswa')->with('susccess', 'Data berhasil ditambahkan');
        }else{
            return redirect('/siswa/create')->with('error', 'Data gagal ditambahkan');
        }
    }
}
