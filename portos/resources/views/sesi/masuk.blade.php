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

      <div class="customgambar" style=" margin-top: -40px; ">
        <img src="/gambarloginregister.svg" style="width: 780px; height: 780px;">
      </div>

    <div class="customregister" style="margin-left: 508px; margin-top: -555px;">  

      <h1 class="fw-bold mx-auto" style="width: 250px">Login</h1>
      <p class="text-start fw-normal" style="margin-left: 385px; width: 500px; height: 50px; color: #284860;">Selamat datang di Portos, silahkan login untuk memulai menggunakan website </p>


      <form action="/sesi/login" method="POST">
        @csrf
        <div class="form-outline mb-4 mx-auto" style="width: 250px; padding-top: 50px;">
          <label class="form-label fw-bold" for="email">Email address</label>
          <input type="email" name="email" class="form-control" value="{{Session::get('email')}}" style="width: 476px;">
        </div>

        <!-- Password-->
        <div class="form-outline mb-4 mx-auto" style="width: 250px">
          <label class="form-label fw-bold" for="password">Password</label>
          <input type="password" name="password" class="form-control" style="width: 476px;">
        </div>

        <div class="mt-5" style="margin-left: 400px;">
          <button class="btn rounded-5 fw-bold text-white" href="location.href='/home'" style="background-color:#FFBE55; width: 440px; height: 55px;">Masuk</button>
        </div>

      </form>  

      <div class="col mt-3 d-flex justify-content-center" style="margin-left: 200px;">
        <p class="text-start fw-semibold">Tidak punya akun?</p>
        <p class="fw-bold alert-link" onclick="location.href='/sesi/register'"  style="margin-left: 15px; color: #FFBE55; cursor:pointer">Daftar disini</p>
      </div>
      
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>