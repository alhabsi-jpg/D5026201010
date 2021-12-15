</head>
<body>
    @extends('layout.happy')
    @section('konten')
<center>
    <h3>Data Karyawan1</h3>

</center>

	<br/>
	<br/>
    <div class="row justify-content-center">
        <div class="col-auto">
            <table class="table table-responsive table-bordered mb-5 pb-5">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Gaji</th>
                </tr>
                @foreach($Karyawan1 as $k)
                <tr>
                    <td>{{ $k->NIP }}</td>
                    <td>{{ $k->Nama }}</td>
                    <td>{{ $k->Pangkat }}</td>
                    <td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
                    <td>
                        <a href="/Karyawan1/edit/{{ $k->NIP }}">Edit</a>
                        |
                        <a href="/Karyawan1/view/{{ $k->NIP }}">view detail</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
      @endsection



</body>
</html>
