<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form kelas</h1>
    <from action="{{ url('siswa') }}" method="POST">
    @csrf

    <label for="id_kelas">ID Kelas:</label><br>
        <input type="text" id="id_kelas" name="id_kelas"><br>
        
        <label for="nama_kelas">Nama Kelas:</label><br>
        <input type="text" id="nama_kelas" name="nama_kelas"><br>   
        
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan"><br>
        
        <label for="lokasi_ruangan">Lokasi Ruangan:</label><br>
        <input type="text" id="lokasi_ruangan" name="lokasi_ruangan"><br>
        
        <label for="nama_wali_kelas">Nama Wali Kelas:</label><br>
        <input type="text" id="nama_wali_kelas" name="nama_wali_kelas"><br><br>
        
        <input type="submit" value="Submit">
</from>
</body>
</html>