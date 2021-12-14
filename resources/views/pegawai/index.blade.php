<html>
<head>
    @extends('layout/happy')
</head>
<body>
    @section('konten')
	<h3>Data Pegawai</h3>
    <title>Data Pegawai</title>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <p>Cari Data Pegawai : </p>
    <div class="d-flex justify-content-start mb-3">
        <form action="/pegawai/cari" method="GET">
            <input type="search" class="form-control" placeholder="Search..." name="cari" value="{{ old('cari') }}">
        </form>
        <div class="text-center ms-3">
            <a href="/pegawai" class="btn btn-secondary"><i class="fas fa-undo"></i></a>
        </div>
    </div>
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
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <div class="halaman pt-3">
    {{ $pegawai->links()  }}
    </div>

    @endsection


</body>
</html>
