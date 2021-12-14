@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('konten')
    <a href="/absen"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
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
        <input type="radio" id="h" name="status" value="H">
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" checked="checked">
        <label for="a">TIDAK HADIR</label><br>
        <input type="submit" value="Simpan Data">
    </form>
@endsection

