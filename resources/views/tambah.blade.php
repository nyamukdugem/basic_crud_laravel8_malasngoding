<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Crud - Tambah Data</title>
</head>
<body>
    <h3>Data Pegawai</h3>
    <a href="/pegawai">Kembali</a>

    <form action="/pegawai/store" method="post">
        {{csrf_field()}}
        Nama <input type="text" name="nama" required="required"><br/>
        Jabatan <input type="text" name="jabatan" required="required"><br/>
        Umur <input type="number" name="umur" required="required"><br/>
        Alamat <textarea name="alamat" required="required"></textarea><br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>