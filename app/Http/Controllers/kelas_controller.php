<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kelas_Controller extends Controller
{
    public function index()
    {
        $siswa = DB::table('table_kelas')->get();
        return view('siswa.kelas', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kelas' => 'required|numeric|max:100',
            'nama_kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'lokasi_ruangan' => 'required|string|max:255',
            'nama_wali_kelas' => 'required|string|max:255'
        ]);
        $input = $request->except('_token'); 
        $status = DB::table('table_kelas')->insert($input);

        if ($status) {
            return redirect('/siswa')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/kelas/create')->with('error', 'Data gagal ditambahkan');
        }
    }
}

?>