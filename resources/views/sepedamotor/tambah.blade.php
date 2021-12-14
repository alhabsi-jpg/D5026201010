<!DOCTYPE html>
<html>
    @extends('layout/happy')
    @section('konten')
<head>
	<title>Table Sepeda Motor</title>
</head>
<body>

	<h3>Data Sepeda Motor</h3>

	<a href="/sepedamotor">Kembali</a>

	<br/>
	<br/>

	<form action="/sepedamotor/store" method="post">
		{{ csrf_field() }}
		Merek Sepeda Motor <input type="text" name="merksepedamotor" required="required"> <br/>
        Stock Sepeda Motor <input type="number" name="stocksepedamotor" required="required"> <br/>
		Tersedia <input type="text" name="tersedia" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
    @endsection
</body>
</html>
