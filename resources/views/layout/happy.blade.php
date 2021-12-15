<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">


</head>
<body>
    <div class="container-fluid min-vw-100"  >
        <div class="row m-5">
            <aside class="col-2">
                <header class="row navbar-brand container rounded bg-secondary bg-opacity-10 p-2">
                    <div class="col-4 py-2">
                        <a href="" class="navbar-brand">
                            <img src="{{ asset('../../images/Me.jpg') }}" class="img-fluid rounded float-start"/>
                        </a>
                    </div>
                    <div class="col-8 fw-bold text-decoration-none text-wrap text-dark py-2">
                        <div class="row">
                            <span style="color: rgb(233, 229, 0)" >5026201010</span>
                        </div>
                        <div class="row">
                            <span st>Al Habsi Waliyul Khaq</span>
                        </div>
                    </div>
                </header>
                <div class="row container rounded bg-secondary bg-opacity-10 mt-4 p-2">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky-top">
                        <div class="col fw-bold">
                            <div class="  mb-1">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a href="/pegawai" class="nav-link text-dark">Data Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/absen" class="nav-link text-dark">Data Absen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tugas" class="nav-link text-dark">Data Tugas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/sepedamotor" class="nav-link text-dark">Praktikum</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Karyawan1" class="nav-link text-dark">UAS</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                </div>
            </aside>
            <div class="col-10">
                <div class="row container rounded bg-secondary bg-opacity-10 p-5">
                    @yield('konten')
                </div>
            </div>
        </div>
        <footer class="m-5">
            <div class="row text-center">
                <span>&copy; 2021</span>
            </div>
            <div class="row text-center">
                <span>Hak Cipta oleh Al Habsi Waliyul Khaq</span>
            </div>
        </footer>
    </div>



<footer>
</footer>
</body>

</html>
