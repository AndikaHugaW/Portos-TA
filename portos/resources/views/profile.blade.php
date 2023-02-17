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

    <div class="container align-it d-flex" style="margin-top: -40px;">
      <img src="/background-profile.svg" style="margin-left: -109px; max-width: 1516px; height: 400px;" alt="background-explore">

    </div>

    <!-- Button Menu -->
    <div class="container">
      <div class="row row-cols-auto" style="margin-left: 355px;">

        <!--Project Saya -->
        <div class="col">
          <button type="button" class="btn rounded-pill fw-semibold" style="background-color: #FFBE55; color: #fff; font-size: 22px;">
            <span>
              <img src="/icon-folder.svg" alt="">Project Saya
            </span>
          </button>
        </div>

        <!--Koleksi -->
        <div class="col">
          <button type="button" class="btn rounded-pill fw-semibold" style="background-color: #F6F7F9; color: #FFBE55; font-size: 22px;">
            <span>
              <img src="/icon-koleksi.svg" alt="">Koleksi

            </span>

          </button>

        </div>

        <!--Favorit -->
        <div class="col">
          <button type="button" class="btn rounded-pill fw-semibold" style="background-color: #F6F7F9; color: #FFBE55; font-size: 22px;">
            <span>
              <img src="/icon-favorit.svg" alt="">Favorit

            </span>

          </button>

        </div>

      </div>

    </div>

    <div class="container">
      <div class="row row-cols-auto" style="margin-top: 85px; margin-left: 215px;">

          <div class="col" >
            <img class="card-img-top rounded-top" src="/restaurant-app-profile.png" alt="Card image cap" style="width: 340px; height: 200px;">
            <div class="card-body" style="width: 340px; height: 200px;">
              <h5 class="card-title mt-2">Restaurant Apps</h5>
              <img src="/Goyoun-jung.svg" style="margin-top: 20px;" alt=""><p class="card-text fw-semibold" style="margin-top: -25px; margin-left: 40px;">Go Youn Jung</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col" >
            <img class="card-img-top rounded-top" src="/design-profile-1.jpg" alt="Card image cap" style="width: 340px; height: 200px;">
            <div class="card-body" style="width: 340px; height: 200px;">
              <h5 class="card-title mt-2">NOX Music Websites</h5>
              <img src="/Goyoun-jung.svg" style="margin-top: 20px;" alt=""><p class="card-text fw-semibold" style="margin-top: -25px; margin-left: 40px;">Go Youn Jung</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col" >
            <img class="card-img-top rounded-top" src="/3d-programmer-profile.png" alt="Card image cap" style="width: 340px; height: 200px;">
            <div class="card-body" style="width: 340px; height: 200px;">
              <h5 class="card-title mt-2">Programmer 3D</h5>
              <img src="/Goyoun-jung.svg" style="margin-top: 20px;" alt=""><p class="card-text fw-semibold" style="margin-top: -25px; margin-left: 40px;">Go Youn Jung</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>

      </div>

      <!-- Card Profile -->
      <div class="card rounded-4" style="width: 307px; height: 512px; margin-top: -680px; margin-left: -98px;">
        <img src="/profile-3.jpg" class="rounded-circle" alt="" style="width: 60px; height: 60px; margin-left: 120px; margin-top: 50px;">
        <h5 class="fw-bold text-lg-center mt-3" style="color: #FFBE55;">Go Youn Jung</h5>
        <span class="text-center fw-bold" style="font-size: 13px; margin-left: -10px; color: #00000030;"><img src="/icon-location.svg" alt=""> Seoul, South Korea</span>
        <p class="text-center fw-bold" style="font-size: 13px; color: #00000030; margin-top: 20px; margin-left: 65px; width: 175px; height: 80px;">A wholesome form owner in
          Montana, Upcoming gallery
          solo show in Korea</p>

        <div class="container">
          <div class="row row-cols-auto justify-content-center">  
            <button class="btn rounded-pill fw-semibold text-white" onclick="location.href='http://127.0.0.1:8000/editprofile'" style="background-color: #FFBE55; width: 70px; height: 30px; font-size: 8px;">Edit Profile</button>
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

        <hr class="hr hr-blurry" style="margin-left: 65px; width: 150px; margin-top: 20px;">

        <div class="text-center" style="margin-top: 35px;">
          <p class="fw-semibold" style="font-size: 10px; color: #00000030;">Member since Nov 15, 2022</p>
        </div>

        </div>  

      </div>
      
    </div>

  <x-footer/>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>