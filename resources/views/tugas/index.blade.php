<!DOCTYPE html>
<html>
<head>
    @extends('layout/happy')
</head>
<body>
    @section('konten')
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1" class="table table-responsive table-bordered mb-5 pb-5">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas}}</td>
            <td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
                |
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
    <div class="halaman pt-3">
        {{ $tugas->links()  }}
    </div>
    @endsection


</body>
</html>
