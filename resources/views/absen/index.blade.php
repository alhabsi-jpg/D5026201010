<!DOCTYPE html>
<html>

<head>
    @extends('layout/happy')
</head>
<body>
    @section('konten')
	<h3>Data Absen</h3>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-responsive table-bordered mb-5 pb-5" >
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <div class="halaman pt-3">
        {{ $absen->links()  }}
    </div>
    @endsection


</body>
</html>
