<!DOCTYPE html>
<html>
    @extends('layout/happy')
<head>
</head>
<body>
@section('konten')

	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="row">
            <div class="col-1">
                nama  :
            </div>
            <div class="col-1">
                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                jabatan :
            </div>
            <div class="col-1">
                <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                Umur  :
            </div>
            <div class="col-1">
                <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                Alamat :
            </div>
            <div class="col-1">
                <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
            </div>
        </div>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
</body>
</html>
