<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    </style>

    <title>ADMIN</title>
  </head>
  <body class="" style="background-color: #4285F4">

    <div class="d-flex justify-content-center" style="margin-top: 80px; ">
      <div class="card rounded" style="width: 80%; border-radius: 100px;">
        <p class="text-start p-sm-3 fw-bold text-primary" style="font-family: poppins;">PORTOS</p>
        <div class="col text-start p-5" style="margin-left: 120px;">
          <p class="fw-semibold" style="font-size: 20px; font-family: poppins;">Welcome Back</p>
          <p class="fw-normal" style="font-size: 12px; font-family: poppins; margin-top: -15px;">Please enter your details</p>

          <!-- Form Email-->
          <div class="d-flex p-2 justify-content-start form-outline mb-4" style="margin-left: -110px;">
            <input type="email" placeholder="Email" id="inputemail5" class="form-control p-2" style="width: 350px; font-size: 12px; font-family: poppins;">
          </div>

          <!-- Form Passowrd -->
          <div class="d-flex p-2 justify-content-start form-outline mb-4" style="margin-left: -110px;">
            <input type="password" placeholder="Password" id="inputpassword5" class="form-control p-2" style="width: 350px; font-size: 12px; font-family: poppins;">
          </div>

          <div class="d-flex p-2 justify-content-start">
            <button class="btn btn-rounded p-2 fw-bold" style="margin-left: -110px; width: 350px; background-color: blue; color: #fff; border-radius: 60px;">Masuk</button>
          </div>

          <div class="col mt-3 d-flex justify-content-start" style="margin-left: -30px;">
            <p class="text-start fw-semibold" style="font-size: 12px;">Tidak punya akun?</p>
            <a href="#" class="fw-bold alert-link text-decoration-none" onclick="location.href='http://127.0.0.1:8000/registeradmin'"  style="font-size: 12px; margin-left: 5px; color: #0C73EB;">Daftar disini</a>
          </div>

          <!-- Button Login Google-->
          <div class="" style="margin-left: -105px; ">
            <button class="btn btn-outline-primary text-center rounded-2 fw-semibold pt-2 pb-2 position-relative" style="width: 350px; font-family: poppins;">
              <span class="justify-content-start me-1">
                <img src="/icon-google.svg" style="width: 30px;" alt="">
              </span>Continue with Google
            </button>

          </div>

          <!-- Button Login Facebook-->
          <div class="pt-3" style="margin-left: -105px; ">
            <button class="btn btn-outline-primary text-center rounded-2 fw-semibold pt-2 pb-2 position-relative" style="width: 350px; font-family: poppins;">
              <span class="justify-content-start me-1" style="margin-top: -10px;">
                <img src="/icon-facebook2.svg" style="width: 30px;" alt="">
              </span>Continue with Facebook
            </button>

          </div>

           <!-- Gambar ILlustration-->
          <div class="col-md-6 col-lg-5 d-none d-md-block" style="margin-left: 600px; margin-top: -545px;">
            <img src="/illustration-admin.png" class="img-fluid" style="width: 400px; height: 600px;" alt="">
          </div>

        </div>

      </div>

    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>