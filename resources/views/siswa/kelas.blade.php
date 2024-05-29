belajar laravel, tulisan ini ditampilkan dari routes
<br>
@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endsession

    @session('error')
    <div class="alert alert-error">
        {{ session('error') }}
    </div>

    @endsession
<a href="{{ url('/kelas/create') }}">Tambah Data</a>
<table border="1">
    <tr>
        <td>Id kelas</td>
        <td>Nama kelas</td>
        <td>Jurusan</td>
        <td>Lokasi ruangan</td>
        <td>Nama wali kelas</td>
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