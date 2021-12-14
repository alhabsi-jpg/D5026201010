<html>
<head>
    @extends('layout/happy')
    @section('konten')
	<title>Daftar Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h3>Data Pengurus</h3>

	<a href="/sepedamotor/tambah"> + Tambah Pengurus Baru</a>


	<br/>
	<br/>
    <div class="row">
        <div class="col-auto">
            <table class="table table-responsive table-bordered mb-5 pb-5">
                <tr>
                    <th>Merk Sepeda Motor</th>
                    <th>Stock Sepeda Motor</th>
                    <th>Tersedia</th>
                </tr>
                @foreach($sepedamotor as $s)
                <tr>
                    <td>{{ $s->merksepedamotor }}</td>
                    <td>{{ $s->stocksepedamotor }}</td>
                    <td>{{ $s->tersedia }}</td>
                    <td>
                        <a href="/sepedamotor/edit/{{ $s->kodesepedamotor }}">Edit</a>
                        |
                        <a href="/sepedamotor/hapus/{{ $s->kodesepedamotor }}">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
      <div class="halaman pt-3">
        {{ $sepedamotor->links()  }}
    </div>

      @endsection

</body>
</html>
