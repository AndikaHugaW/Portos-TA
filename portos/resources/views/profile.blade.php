<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="main-content" style="background-color: #F6F7F9">

  <x-navbar/>

    <section class="container" style="margin-top: -40px;">
      <img src="/background-profile.svg" style="margin-left: -109px; width: 117%; height: 400px;" alt="background-explore">
    </section>



    <!-- Card Profile -->

    <section class="card rounded-4" style="width: 307px; height: 350px; margin-left: 60px; margin-top: -150px;">
      {{-- <div class="d-flex justify-content-center" style="margin-top: 50px;">
        <img class="rounded-circle" src="/profile-3.jpg" style="width: 80px;" alt="">
      </div> --}}



      <div class="d-flex row justify-content-center">
        <h5 class="text-center mt-3" style="font-family: poppins;">{{$users->name}}</h5>
        <span class="text-center fw-regular p-1" style="font-size: 10px; font-family: poppins;"><img src="/icon-email.svg" alt="">{{$users->email}}</span>
        <p class="text-center" style="width: 200px; font-family: poppis; font-size: 12px;">{{$users->bio}}</p>

          <div class="container">
            <div class="row row-cols-auto justify-content-center">
              <button class="btn rounded-pill fw-semibold text-white" onclick="location.href='/profile/edit'" style="background-color: #FFBE55; width: 70px; height: 30px; font-size: 8px;">Edit Profile</button>
              <img src="/icon-inbox.svg" style="width: 50px; height: 50px; margin-top: -10px; margin-left: 5px;" alt="Button-Inbox">
              <img src="/icon-logout.svg" onclick="location.href='http://127.0.0.1:8000/login'" style="width: 50px; height: 50px; margin-top: -10px; margin-left: -5px;" alt="Button-Logout">
            </div>
          </div>

          <div class="container">
            <div class="row row-cols-auto justify-content-center mt-4">
              <img src="/icon-twitter.svg" class="" alt="" style="width: 44px; height: 44px;">
              <img src="/icon-instagram.svg" class="" alt="" style="width: 44px; height: 44px;">
              <img src="/icon-facebook.svg" class="" alt="" style="width: 44px; height: 44px;">
              <img src="/icon-gmail.svg" class="" alt="" style="width: 44px; height: 44px;">
            </div>

          </div>

          <hr class="d-flex justify-content-center mt-3" style="width: 50%;">

          <div class="d-flex justify-content-center">
            <p class="fw-semibold" style="font-family: poppins; font-size: 12px;">Member since Nov 15, 2022</p>
          </div>



      </div>


    </section>


    <section class="container">
      <div class="row row-cols-auto" style="margin-left: 355px; margin-top: -340px;">

        <div class="btn-group" role="group">

            <!--Project Saya -->
          <div class="col">
            <button type="button" class="btn rounded-pill p-2 fw-semibold" style="background-color: #ffbe55; ; color: #F6F7F9; font-size: 22px; width: 190px;">
              <span>
                <img src="/public/{$}" style="margin-top: -10px;" alt="">Project Saya
              </span>
            </button>
          </div>


        </div>


      </div>
    </section>

    <!-- Card Project -->
    <section class="container">
      <div class="row row-cols-4 mt-5" style="margin-left: 355px; margin-top: -30px">
        @foreach($judul_portos as $porto)
        <a href="/detailporto/{{$porto->id}}" style="text-decoration: none; margin-right: 3em; margin-top: 2em">
          <div class="card col-1 " style="width: 14rem; ">
          <img src="{{asset('images/' . $porto->image[0]->images)}}" style="max-height: 200px; min-height: 200px" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="title card-text" style="text-decoration: none; color: black; text-align: left">{{$porto->judul}}</p>
            <p class="title card-text" style="text-decoration: none; color: black; text-align: left">{{$porto->juruan}}</p>
            <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px;" alt=""><p class="fw-semibold" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: 40px; text-decoration: none; color: black;">{{$users->name}}</p>
            <p class="title fw-semibold card-text" style="margin-left: -10px; text-decoration: none; color: black;">{{$porto->judul}}</p>
            <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px; margin-left: -10px;" alt=""><p class="fw-regular" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: 30px; text-decoration: none; color: black;">{{$users->name}}</p>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </section>



<div style="margin-top: 50px">
    <x-footer/>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
