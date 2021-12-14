<!DOCTYPE html>
<html>
@extends('layout/happy')
<head>
</head>
<body>
    @section('konten')
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="idPegawai" value="{{ $t->IDPegawai }}"> <br/>
		<div class="input-group mb-3">
            <label for="datetimepicker1">Tanggal :</label>
            <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                <input id='datetimepicker1Input' type='text' class='form-control' name="tanggal" data-td-target='#datetimepicker1' required/>
                <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                    <span class='fas fa-calendar'></span>
                </span>
            </div>
            <script>
                new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
                    hooks: {
                        inputFormat: (context, date) => {
                        return moment(date).format('YYYY-MM-DD hh:mm:ss')
                        }
                    }
                });
            </script>
        </div>
		NamaTugas <input type="text" required="required" name="namaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input required="text" name="status" value="{{ $t->Status }}" > <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
    @endsection

</body>
</html>
