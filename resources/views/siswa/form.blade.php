<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas</title>
</head>
<body>
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!</strong>
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Form Kelas</h1>
    <form action="{{ url('/siswa/kelas') }}" method="POST">
        @csrf

        <label for="id_kelas">ID Kelas:</label><br>
        <input type="text" id="id_kelas" name="id_kelas"  value="{{ old('id_kelas')}}"><br>
        
        <label for="nama_kelas">Nama Kelas:</label><br>
        <input type="text" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas')}}"><br>   
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan')}}"><br>
        
        <label for="lokasi_ruangan">Lokasi Ruangan:</label><br>
        <input type="text" id="lokasi_ruangan" name="lokasi_ruangan" value="{{ old('lokasi_ruangan')}}"><br>
        
        <label for="nama_wali_kelas">Nama Wali Kelas:</label><br>
        <input type="text" id="nama_wali_kelas" name="nama_wali_kelas"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
