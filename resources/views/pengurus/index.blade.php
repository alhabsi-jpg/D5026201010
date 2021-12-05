<html>
<head>
	<title>Daftar Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<center>
    <h3>Data Pengurus</h3>

	<a href="/pengurus/tambah"> + Tambah Pengurus Baru</a>
</center>

	<br/>
	<br/>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive table-bordered mb-5 pb-5">
                <tr>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Jabatan</th>
                </tr>
                @foreach($table_pengurus as $p)
                <tr>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nrp }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>
                        <a href="/pengurus/edit/{{ $p->id }}">Edit</a>
                        |
                        <a href="/pengurus/hapus/{{ $p->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>



</body>
</html>
