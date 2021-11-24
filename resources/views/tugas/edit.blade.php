<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="idPegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="namaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input required="text" name="status" value="{{ $t->Status }}" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
