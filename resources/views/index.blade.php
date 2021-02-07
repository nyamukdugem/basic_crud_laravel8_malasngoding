<!-- ditambah bootstrap -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>

    <!-- load assets boostrap -->
    <link rel="stylesheet" href="{{ asset('folder/bootstrap.min.css')}}">
    <script src="{{ asset('folder/bootstrap.min.js')}}" defer></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Ngapain malas?</h2>
                <h3>Data Pegawai</h3>
                <p>Cari pegawai :</p>

                <div class="form-group">

                </div>
                <form action="/pegawai/cari" method="get" class="form-inline">
                <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" name="cari" placeholder="Silahkan cari sendiri ya">
                    </div>
                    <div class="col-md-4">
                    <input type="submit" class="btn btn-primary" value="Cari">
                    </div>
                </form>
                </div>
                <br>
                <a href="/pegawai/tambah" class="btn btn-sm btn-primary mb-2 float-right">Tambah</a>
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pegawai as $p)
                    
                    <tr>
                        <td>{{$p->pegawai_nama}}</td>
                        <td>{{$p->pegawai_jabatan}}</td>
                        <td>{{$p->pegawai_umur}}</td>
                        <td>{{$p->pegawai_alamat}}</td>
                        <td>
                            <a href="/pegawai/edit/{{$p->pegawai_id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/pegawai/hapus/{{$p->pegawai_id}}" class="btn btn-danger btn-sm">Edit</a>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>

                <br>
            </div>
        </div>
    </div>
</body>
</html>

<!-- Bawaan pertama kali -->
<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel</title>
    </head>

    <body>
        <h2>Kenapa malas.com</h2>
        <h3>Data Pegawai</h3>
        <a href="/pegawai/tambah">+Tambah Pegawai Baru</a>

        <br/> <br/>

        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{$p->pegawai_nama}}</td>
                <td>{{$p->pegawai_jabatan}}</td>
                <td>{{$p->pegawai_umur}}</td>
                <td>{{$p->pegawai_alamat}}</td>
                <td>
                    <a href="/pegawai/edit/{{$p->pegawai_id}}">Edit</a> |
                    <a href="/pegawai/hapus/{{$p->pegawai_id}}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html> -->