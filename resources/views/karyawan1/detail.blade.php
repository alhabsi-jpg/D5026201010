@extends('layout.happy')

@section('konten')
        @foreach ($Karyawan1 as $k)
            <br>
            <div>
                <label for="NIP">NIP :</label>
                {{ $k->NIP }}
                <p>
            </div>

            <div>
                <label for="Nama">Nama :</label>
                {{ $k->Nama }}
                <p>
            </div>

            <div>
                <label for="Pangkat">Pangkat :</label>
                {{ $k->Pangkat }}
                <p>
            </div>

            <label for="Gaji">Gaji : {{ $k->Gaji }}</label>
            <br>
            <br>
            <p>


                <a href="/karyawan1" class="btn btn-primary">Kembali</a>
                <br>
                </div>
        @endforeach
@endsection
