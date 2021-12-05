<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
                                    <a href="#" class="nav-link disabled">Minggu Depan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">Praktikum</a>
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
                <span>Hak Cipta oleh </span>
            </div>
        </footer>
    </div>



<footer>
</footer>
</body>

</html>
