<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div>

      <div class="customgambar" style="width: 100px; height: 280px;">
        <img src="/gambarloginregister.svg">
      </div>

    <div class="customregister" style="margin-left: 508px; margin-top: 2px;">  

      <h1 class="fw-bold mx-auto" style="width: 250px">Register</h1>
      <p class="fw-semibold text-start fw-normal" style="margin-left: 385px; width: 300px; height: 25px; color: #284860;">Silahkan buat akun untuk login </p>

      <div class="mt-2 mx-auto" style="width: 250px;">
        <label for="inputemail5" class="fw-bold form-label mt-3 ">Nama Lengkap</label>
        <input type="email" id="inputemail5" class="form-control" style="width: 476px;" aria-describedby="emailHelpBlock">
      </div>

      <div class="mt-2 mx-auto" style="width: 250px;">
        <label for="inputemail5" class="fw-bold form-label mt-3 ">Email</label>
        <input type="email" id="inputemail5" class="form-control" style="width: 476px;" aria-describedby="emailHelpBlock">
      </div>  

      <div class="mt-2 mx-auto" style="width: 250px">
        <label for="inputpassword5" class="fw-bold form-label mt-3">Password</label>
        <input type="password" id="inputPassword5" class="form-control" style="width: 476px;" aria-describedby="passwordHelpBlock">
      </div>  

      <div class="mt-5" style="margin-left: 380px;">
        <button class="btn rounded-5 fw-bold text-white" onclick="location.href='http://127.0.0.1:8000/login'" style="background-color:#FFBE55; width: 440px; height: 55px;">Daftar</button>
      </div>

      <div class="col mt-3 d-flex justify-content-center" style="margin-left: 200px;">
        <p class="text-start fw-semibold">Sudah punya akun?</p>
        <p class="fw-bold alert-link" onclick="location.href='http://127.0.0.1:8000/login'" style="margin-left: 15px; color: #FFBE55;">Masuk sekarang</p>
      </div>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>