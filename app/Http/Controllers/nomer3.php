<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nomer3 extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'table_kelas' dan mengurutkan berdasarkan 'jurusan' dan 'nama_kelas'
        $siswa = DB::table('table_kelas')->orderBy('jurusan')->orderBy('nama_kelas')->get();
        
        // Mengirim data 'siswa' ke view 'nomer1'
        return view('nomer3', compact('siswa'));
    }
}
?>
