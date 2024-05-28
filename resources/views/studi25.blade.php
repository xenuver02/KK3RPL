belajar laravel, tulisan ini ditampilkan dari routes

@session('succes')
    <div class="alert alert-succses">
        {{ session('succses') }}
    </div>
    @endsession

    @session('error')
    <div class="alert alert-error">
        {{ session('error') }}
    </div>

    @endsession
<br>
<a href="{{ url('/siswa/create') }}">Tambah Data</a>
<table border="1">
    <tr>
        <td>Id kelas</td>
        <td>Nama kelas</td>
        <td>Jurusan</td>
        <td>Lokasi ruangan</td>
        <td>Nama wali</td>
    </tr>
    @foreach ($siswa as $row)
    <tr>
   
        <td>{{ $row->id_kelas}}</td>
        <td>{{ $row->nama_kelas}}</td>
        <td>{{ $row->jurusan}}</td>
        <td>{{ $row->lokasi_ruangan}}</td>
        <td>{{ $row->nama_wali_kelas}}</td>
    </tr>
    
    @endforeach
</table>