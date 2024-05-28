<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form siswa</h1>
    <Form action="{{ url('siswa') }}" method="POST">
    @csrf

    NIS : <input type="text" name="nis"><br>
    Nama Lengkap : <input type="text" name="nama_lengkap"><br>
    Jenis Kelamin : <br>
    <label for="L"><input type="radio" name="JK" id="L" value="L">Laki-Laki</label>
    <label for="P"><input type="radio" name="JK" id="P" value="P">Perempuan</label>
    <br>
    Golongan Darah :
    <select name="golongan_darah">
        <option value="" >Pilih golongan darah</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
    </select>
    <input type="submit" value="Simpan">
</Form>
</body>
</html>