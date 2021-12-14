@extends('layout.happy')

@section('konten')
        @foreach ($sepedamotor as $s)
            <br>
            <div>
                <label for="merksepedamotor">merk Sepedamotor :</label>
                {{ $s->merksepedamotor }}
                <p>
            </div>

            <div>
                <label for="stocksepedamotor">Stock Sepedamotor :</label>
                {{ $s->stocksepedamotor }}
                <p>
            </div>

            <div>
                <label for="tersedia">Tersedia :</label>
                {{ $s->tersedia }}
                <p>
            </div>
            <br>
            <br>
            <p>


                <a href="/sepedamotor" class="btn btn-primary"> Kembali</a>
                <br>
                </div>
        @endforeach
@endsection
