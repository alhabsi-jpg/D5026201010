@extends('layout.happy')

@section('konten')
        @foreach ($pegawai as $p)
            <br>
            <div>
                <label for="nama">Nama :</label>
                {{ $p->pegawai_nama }}
                <p>
            </div>

            <div>
                <label for="jabatan">Jabatan :</label>
                {{ $p->pegawai_jabatan }}
                <p>
            </div>

            <div>
                <label for="umur">Umur :</label>
                {{ $p->pegawai_umur }}
                <p>
            </div>

            <label for="alamat">Alamat : {{ $p->pegawai_alamat }}</label>
            <br>
            <br>
            <p>


                <a href="/pegawai" class="btn btn-primary"> Kembali</a>
                <br>
                </div>
        @endforeach
@endsection
