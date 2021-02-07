<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai</title>
</head>
<body>
    <h3>Edit Pegawai</h3>
    <a href="/pegawai">Kembali</a> <br><br>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$p->pegawai_id}}"><br>
    Nama <input type="text" required name="nama" value="{{$p->pegawai_nama}}"><br>
    Jabatan <input type="text" required name="jabatan" value="{{$p->pegawai_jabatan}}"><br>
    Umur <input type="number" required name="umur" value="{{$p->pegawai_umur}}"><br>
    Alamat <textarea name="alamat" required>{{$p->pegawai_alamat}}</textarea><br>
    <input type="submit" value="Simpan Data">
    </form>
    @endforeach
</body>
</html>