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
            padding-top: 15px;
            width: 400px;
        }

        .tombolSubmit
        {
            margin-top: 10px;
        }
    </style>

    <script>
        $(function(){
    $("#fullName_error_message").hide();
    $("#userName_error_message").hide();
    $("#email_error_message").hide();



    var error_fname = false;
    var error_username = false;
    var error_email = false;
    var error_zipcode= false;

    $("#fullName").focusout(function(){
        check_fname();
     });

    $("#userName").focusout(function() {
        check_username();
     });

     $("#email").focusout(function() {
        check_email();
     });


     $("#zipCode").focusout(function() {
        check_zipcode();
     });


     function check_fname() {
        var pattern = /^[a-zA-Z]*$/;
        var fname = $("#fullName").val();
        if (pattern.test(fname) && fname !== '') {
           $("#fullName_error_message").hide();
        } else {
           $("#fullName_error_message").html("Should contain only Characters");
           $("#fullName_error_message").show();
           error_fname = true;
        }
     }

     function check_username() {
        var username_length = $("#userName").val().length;
        if (username_length < 6) {
           $("#userName_error_message").html("Atleast 6 Characters ");
           $("#userName_error_message").show();
           error_username = true;
        } else {
           $("#userName_error_message").hide();
        }
     }

     function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#email").val();
        if (pattern.test(email) && email !== '') {
           $("#email_error_message").hide();
        } else {
           $("#email_error_message").html("Invalid Email");
           $("#email_error_message").show();
           error_email = true;
        }
     }


    function check_zipcode() {
        var pattern = /^[0-9]{6}$/;;
        var zipCode = $("#zipCode").val();
        if (pattern.test(zipCode) && zipCode !== '') {
           $("#zip_code_error_message").hide();
        } else {
           $("#zip_code_error_message").html("Should contain only numbere and must be 6 character");
           $("#zip_code_error_message").show();
           error_zipcode = true;
        }
    }



     $("#registration_form").submit(function() {
        error_fname = false;
        error_username = false;
        error_email = false;
        error_zipcode=false;

        check_fname();
        check_username();
        check_email();
        check_zipcode();

        if (error_fname === false && error_username === false && error_email === false && error_zipcode===false) {
           alert("Registration Successfull");
           return true;
        } else {
           alert("Please Fill the form Correctly");
           return false;
        }


     });

})
    </script>

</head>
  <body>
    <div class="container form-container">
      <div class="row"><h1 class="text-center">FORM</h1></div>
      <form id="registration_form">
        <!-- fullname   -->
    <div id="formName" class="row mt-4  input mx-auto">
        <label for="full_Name" class="form-label">Full Name</label>
        <input class="form-control" id="fullName" name="" required="" type="text" placeholder="" />
        <span class="error_form" id="fullName_error_message"></span>
    </div>
        <!-- username-->
    <div id="formUserName"  class="row input mx-auto mt-4">
        <label for="user_Name" class="form-label">Username (6-8 character)</label>
        <input class="form-control" id="userName" name="" required="" type="text" placeholder="" />
        <span class="error_form" id="userName_error_message"></span>
    </div>
        <!-- EMAIL -->
      <div id="formEmail" class="row input mx-auto mt-4">
        <label for="email" class="form-label">Email</label>
        <input class="form-control mx-auto" id="email" type="text" name="" required="" placeholder=""/>
        <span class="error_form" id="email_error_message"></span>
      </div>

        <div class="mx-auto mt-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="form-group">
                <label>State</label>
                <div>
                  <select name="ibukota" class="selectpicker form-control state" data-live-search="true">
                    <option>Jakarta</option>
                    <option>Banda Aceh</option>
                    <option>Medan</option>
                    <option>Padang</option>
                    <option>Pekanbaru</option>
                    <option>Jambi</option>
                    <option>Pelembang</option>
                    <option>Bengkulu</option>
                    <option>Bandar Lampung</option>
                    <option>Pangkalpinang</option>
                    <option>Tanjungpinang</option>
                    <option>Bandung</option>
                    <option>Semarang</option>
                    <option>Yogyakarta</option>
                    <option>Surabaya</option>
                    <option>Serang</option>
                    <option>Denpasar</option>
                    <option>Mataram</option>
                    <option>Kupang</option>
                    <option>Pontianak</option>
                    <option>Palangka Raya</option>
                    <option>Banjarmasin</option>
                    <option>Samarinda</option>
                    <option>Tanjung Selor</option>
                    <option>Manado</option>
                    <option>Palu</option>
                    <option>Makassar</option>
                    <option>Kendari</option>
                    <option>Gorontalo</option>
                    <option>Mamuju</option>
                    <option>Ambon</option>
                    <option>Sofifi</option>
                    <option>Jayapura</option>
                    <option>Manokwari</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>


      <!-- address -->
      <div id="formAddress" class="row input mx-auto mt-4">
        <label for="address" class="form-label">Address</label>
        <input class="form-control mx-auto" id="address" type="text" required="" placeholder="" />
        <span class="error_form" id="address_error_message"></span>
      </div>
        <!-- zipcode -->
      <div id="formZipCode" class="row input mx-auto mt-4">
        <label for="zipCode" class="form-label">Zip Code</label>
        <input class="form-control mx-auto" id="zipCode" type="text" required="" placeholder=""/>
        <span class="error_form" id="zip_code_error_message"></span>
      </div>

      <!-- <div  class="d-grid gap-2 mt-4">
        <button class="btn btn-warning" type="button" type="submit">Submit</button>
      </div> -->
      <div  class="d-grid gap-2 mt-4">
        <input class="btn btn-warning submit" type="submit"></input>

      </div>

    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"</script>
</body>
</html>
