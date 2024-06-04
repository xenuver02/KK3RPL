<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas</title>
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
        .alert-error, .alert-danger {
            background-color: #f2dede;
            color: #a94442;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        ul {
            padding-left: 20px;
            color: #a94442;
        }
    </style>
</head>
<body>
    <div class="form-container">
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
        <form action="{{ url('/siswa/kelas', @$siswa->id_kelas) }}" method="POST">
            @csrf

            @if (!empty(@$siswa))
            @method('PATCH')
            @endif

            <label for="id_kelas">ID Kelas:</label>
            <input type="text" id="id_kelas" name="id_kelas" value="{{ old('id_kelas', @$siswa->id_kelas) }}">

            <label for="nama_kelas">Nama Kelas:</label>
            <input type="text" id="nama_kelas" name="nama_kelas" value="{{ old('nama_kelas', @$siswa->nama_kelas) }}">

            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" value="{{ old('jurusan', @$siswa->jurusan) }}">

            <label for="lokasi_ruangan">Lokasi Ruangan:</label>
            <input type="text" id="lokasi_ruangan" name="lokasi_ruangan" value="{{ old('lokasi_ruangan', @$siswa->lokasi_ruangan) }}">

            <label for="nama_wali_kelas">Nama Wali Kelas:</label>
            <input type="text" id="nama_wali_kelas" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', @$siswa->nama_wali_kelas) }}">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
