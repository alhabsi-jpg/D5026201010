<!DOCTYPE html>
<html>
<head>
	<title>Edit Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<h3>Edit Pengurus</h3>

	<a href="/pengurus"> Kembali</a>

	<br/>
	<br/>

	@foreach($table_pengurus as $p)
	<form action="/pengurus/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
        NRP <input type="number" required="required" name="nrp" value="{{ $p->nrp }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
