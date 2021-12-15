<!DOCTYPE html>
<html>
    @extends('layout/happy')
<head>
</head>
<body>
@section('konten')

	<h3>Edit Karyawan1</h3>

	<a href="/Karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($Karyawan1 as $k)
	<form action="/Karyawan1/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="NIP" value="{{ $k->NIP }}">
        <div class="row">
            <div class="col-1">
                NIP :
            </div>
            <div class="col-1">
                <input type="text" name="NIP" value="{{ $k->NIP }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                Nama  :
            </div>
            <div class="col-1">
                <input type="text" required="required" name="Nama" value="{{ $k->Nama }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                Pangkat :
            </div>
            <div class="col-1">
                <input type="text" required="required" name="Pangkat" value="{{ $k->Pangkat }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                Gaji  :
            </div>
            <div class="col-1">
                <input type="number" required="required" name="Gaji" value="{{ $k->Gaji }}"> <br/>
            </div>
        </div>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
</body>
</html>
