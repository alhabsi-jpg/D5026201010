<!DOCTYPE html>
<html>
    @extends('layout/happy')
<head>
    @section('konten')
	<title>Edit Sepeda Motor</title>

</head>
<body>

	<h3>Edit Sepeda Motor</h3>

	<a href="/sepedamotor"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepedamotor as $s)
	<form action="/sepedamotor/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->kodesepedamotor }}"> <br/>
		Merk Sepeda Motor <input type="text" required="required" name="merksepedamotor" value="{{ $s->merksepedamotor }}"> <br/>
        Stock Sepeda Motor <input type="number" required="required" name="stocksepedamotor" value="{{ $s->stocksepedamotor }}"> <br/>
		Tersedia <input type="text" required="required" name="tersedia" value="{{ $s->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection

</body>
</html>
