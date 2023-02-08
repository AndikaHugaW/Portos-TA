<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div>

      <div class="customgambar" style="width: 100px; height: 280px;">
        <img src="/gambarloginregister.svg">
      </div>

    <div class="customregister" style="margin-left: 508px; margin-top: 45px;">  

      <h1 class="fw-bold mx-auto" style="width: 250px">Login</h1>
      <p class="text-start fw-normal" style="margin-left: 385px; width: 300px; height: 50px; color: #284860;">Selamat datang di Portos, silahkan login untuk memulai menggunakan website </p>

      <div class="form-outline mb-4 mx-auto" style="width: 250px;">
        <label class="form-label fw-bold" for="form1Example1">Email address</label>
        <input type="email" id="inputemail5" class="form-control" style="width: 476px;">
      </div>

      <div class="form-outline mb-4 mx-auto" style="width: 250px">
        <label class="form-label fw-bold" for="form1Example1">Password</label>
        <input type="password" id="inputPassword5" class="form-control" style="width: 476px;">
      </div>

      <div class="mt-5" style="margin-left: 380px;">
        <button class="btn rounded-5 fw-bold text-white" onclick="location.href='http://127.0.0.1:8000'" style="background-color:#FFBE55; width: 440px; height: 55px;">Masuk</button>
      </div>

      <div class="col mt-3 d-flex justify-content-center" style="margin-left: 200px;">
        <p class="text-start fw-semibold">Tidak punya akun?</p>
        <p class="fw-bold alert-link" onclick="location.href='http://127.0.0.1:8000/register'"  style="margin-left: 15px; color: #FFBE55;">Daftar disini</p>
      </div>
      
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>