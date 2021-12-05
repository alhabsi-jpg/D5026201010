<!DOCTYPE html>
<html>
<head>
	<title>Table Pengurus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

	<h3>Data pengurus</h3>

	<a href="/pengurus">Kembali</a>

	<br/>
	<br/>

	<form action="/pengurus/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
        NRP <input type="number" name="nrp" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
