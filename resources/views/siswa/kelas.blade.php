<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
        }
        .alert-error {
            background-color: #f2dede;
            color: #a94442;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .add-data {
            display: inline-block;
            margin-bottom: 15px;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .add-data:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Belajar Laravel, tulisan ini ditampilkan dari routes</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ url('/kelas/create') }}" class="add-data">Tambah Data</a>
    <table border="1">
        <tr>
            <th>Id kelas</th>
            <th>Nama kelas</th>
            <th>Jurusan</th>
            <th>Lokasi ruangan</th>
            <th>Nama wali kelas</th>
            <th colspan="2">Aksi</th>
        </tr>
        @foreach ($siswa as $row)
        <tr>
            <td>{{ $row->id_kelas }}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
            <td>{{ $row->nama_wali_kelas }}</td>
            <td><a href="{{ url('/siswa/edit/' . $row->id_kelas) }}">Edit</a></td>
            <td>
                <form action="{{ url('/siswa', $row->id_kelas) }}" method="POST">
                    @method('DELETE')   
                    @csrf
                    <button type="submit">Hapus data</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
