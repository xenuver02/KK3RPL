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
        <td>Nis</td>
        <td>Nama Lengkap</td>
        <td>Jenis Kelamin</td>
        <td>Golongan darah</td>
    </tr>
    @foreach ($siswa as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
        <td>{{ $row->nama_lengkap }}</td>
        <td>{{ $row -> JK }}</td>
        <td>{{ $row ->golongan_darah }}</td>
    </tr>
    
    @endforeach
</table>