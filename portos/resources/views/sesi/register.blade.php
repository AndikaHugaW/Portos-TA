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

      <div class="customgambar">
        <img src="/gambarloginregister.svg" style="width: 760px; height: 760px; margin-top: -40px;">
      </div>

    <div class="customregister" style="margin-left: 508px; margin-top: -580px;">  

      <h1 class="fw-bold mx-auto" style="width: 250px">Register</h1>
      <p class="fw-semibold text-start fw-normal" style="margin-left: 385px; width: 300px; height: 25px; color: #284860;">Silahkan buat akun untuk login </p>

      <form action="/sesi/create" method="POST">
        @csrf
        <div class="mt-2 mx-auto" style="width: 250px;">
          <label for="name" class="fw-bold form-label mt-3 ">Nama Lengkap</label>
          <input type="text" name="name" id="inputemail5" class="form-control" value="{{Session::get('name')}}" style="width: 476px;" aria-describedby="emailHelpBlock">
        </div>

        <div class="mt-2 mx-auto" style="width: 250px;">
          <label for="email" class="fw-bold form-label mt-3 ">Email</label>
          <input type="email" name="email" id="inputemail5" class="form-control" value="{{Session::get('email')}}" style="width: 476px;" aria-describedby="emailHelpBlock">
        </div>  

        <div class="mt-2 mx-auto" style="width: 250px">
          <label for="password" class="fw-bold form-label mt-3">Password</label>
          <input type="password" name="password" id="inputPassword5" class="form-control" style="width: 476px;" aria-describedby="passwordHelpBlock">
        </div>

      <div class="mt-5" style="margin-left: 380px;">
        <button class="btn rounded-5 fw-bold text-white" href="location.href='/sesi'" name="submit" type="submit" style="background-color:#FFBE55; margin-left: 2 0px; width: 440px; height: 55px;">Daftar</button>
      </div>

    </form>

    <div class="col mt-3 d-flex justify-content-center" style="margin-left: 200px;">
      <p class="text-start fw-semibold">Sudah punya akun?</p>
      <p class="fw-bold alert-link" onclick="location.href='http://127.0.0.1:8000/sesi'"  style="margin-left: 15px; color: #FFBE55; cursor:pointer">Masuk sekarang</p>
    </div>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>