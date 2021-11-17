<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .container
        {
            border: solid;
            width: 1000px;
            height: 1000px;
            margin-top: 20px;
        }
    </style>
    <script>
        $(function(){
            $("#nama_barang_error_message").hide();
            $("#harga_barang_error_message").hide();
            $("#barcode_error_message").hide();

            var error_nama_barang = false;
            var error_harga = false;
            var error_barcode = false;

            $("#inputBarang").focusout(function(){
                check_barang();
            });

            $("#inputHarga").focusout(function(){
                check_harga();
            });

            $("#inputBarcode").focusout(function(){
                check_barcode();
            });

        function check_barang() {
                var barang_length = $("#inputBarang").val().length;
                if (barang_length < 10) {
                $("#nama_barang_error_message").html("Nama Barang minim 10 karakter");
                $("#nama_barang_error_message").show();
                error_nama_barang = true;
                } else {
                $("#nama_barang_error_message").hide();
                }
            }


        function check_harga() {
            var hargaBarang = $("#inputHarga").val();
            if (hargaBarang > 5000) {
            $("#harga_message").hide();
            } else {
            $("#harga_error_message").html("Harga Barang harus angka dan minimal 5000");
            $("#harga_error_message").show();
            error_harga = true;
            }
        }

        check_barcode = () => {
            const kode_barcode = $("#inputBarcode").val();
            if (kode_barcode.length >= 10) {
            $("#barcode_error_message").hide();
            } else {
            $("#barcode_error_message").html("Kode Barkode harus angka dan minimal 10 karakter");
            $("#barcode_error_message").show();
            error_barcode = true;
            }
        };

        $("#inputForm").submit(function(){
            error_nama_barang = false;
            error_harga = false;
            error_barcode = false;

            check_barang();
            check_harga();
            check_barcode();

            if (error_nama_barang === false && error_harga === false && error_barcode === false) {
                alert("trimakasih");
                return true;
            } else {
                alert("Please Fill the form Correctly");
                return false;
            }
        })
        })
    </script>
  </head>
  <body>
      <div class="container">
        <br>
        <h6>Al Habsi Waliyul Khaq </h6>
        <h6>Habsi</h6>
        <h6>5026201010</h6>
        <br>
        <div class="row"><h1 class="text-center">Form Input Data Barang</h1></div>
        <form id="inputForm">
            <br>
            <div class="form-group row">
                <label for="inputBarang" class="col-sm-2 col-form-label">Nama Barang </label>
                <div class="col-1">:</div>
                <div class="col-sm-9">
                  <input type="text" class="form-control border-dark" id="inputBarang" required="">
                  <span class="error_form" id="nama_barang_error_message"></span>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="inputHarga" class="col-sm-2 col-form-label ">Harga </label>
                <div class="col-1">:</div>
                <div class="col-sm-9">
                  <input type="number" class="form-control border-dark" id="inputHarga" required="">
                  <span class="error_form" id="harga_error_message"></span>
                </div>
            </div>
            <br>
            <div class="row justify-content-between pt-3">
                <div class="col-2">Jenis Barang</div>
                <div class="col-1">:</div>
                <div class="col-9 kotak-input">
                  <select class="form-select border border-dark" aria-label="Default select example" required="">
                    <option selected disabled value="">...</option>
                    <option value="1">Makanan</option>
                    <option value="2">Minuman</option>
                    <option value="3">Non Mamin</option>
                  </select>
                  <span class="error_form" id="jenis_barang_error_message"></span>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group row">
                <label for="barcode" class="col-sm-2 col-form-label ">Kode Barcode </label>
                <div class="col-1">:</div>
                <div class="col-sm-9">
                  <input type="number" class="form-control border-dark" id="inputBarcode" required="">
                  <span class="error_form" id="barcode_error_message"></span>
                </div>
            </div>
            <div  class="d-grid gap-2 mt-4">
                <div class="row">
                    <div class="col text-center">
                        <input class="btn btn-primary" type="submit"></input>
                    </div>
                    <div class="col text-center">
                        <input class="btn btn-warning" type="reset"></input>
                    </div>
                </div>
            </div>
        </form>
      </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javaScriptUts.js"></script>
</body>
</html>
