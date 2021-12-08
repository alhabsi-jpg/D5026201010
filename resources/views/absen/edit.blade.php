@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'EDIT DATA ABSEN')

@section('konten')

	<a href="/absen"> Kembali</a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


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

        </div>
        Status
        <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
        <label for="a">         TIDAK HADIR</label><br>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
