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
            return redirect('/kelas')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/kelas/create')->with('error', 'Data gagal ditambahkan');
        }
    }

    public function edit($id)
    {
        $siswa = DB::table('table_kelas')->where('id_kelas', $id)->first();
        return view('siswa.form', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kelas' => 'required|numeric|max:100',
            'nama_kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'lokasi_ruangan' => 'required|string|max:255',
            'nama_wali_kelas' => 'required|string|max:255'
        ]);
        
        $input = $request->all();
        unset($input['_token']);
        unset($input['_method']);
        $status = DB::table('table_kelas')->where('id_kelas', $id)->update($input);

        if ($status) {
            return redirect('/siswa')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect('siswa/edit/' . $id)->with('error', 'Data gagal diperbarui');
        }
    }

    public function destroy($id)
    {
        $status = DB::table('table_kelas')->where('id_kelas', $id)->delete();

        if ($status) {
            return redirect('/siswa')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/siswa')->with('error', 'Data gagal dihapus');
        }
    }
}
?>
