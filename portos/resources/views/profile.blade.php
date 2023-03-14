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
    <section class="card rounded-4" style="width: 307px; height: 512px; margin-left: 60px; margin-top: -150px;">
      <div class="d-flex justify-content-center" style="margin-top: 50px;">
        <img class="rounded-circle" src="/profile-3.jpg" style="width: 80px;" alt="">
      </div>

      <div class="d-flex row justify-content-center">
        <h5 class="text-center mt-3" style="font-family: poppins;">Go Youn Jung</h5>
        <span class="text-center fw-normal p-1" style="font-size: 10px; font-family: poppins;"><img src="/icon-location.svg" alt="">andikahuga34@gmail.com</span>
        <p class="text-center" style="width: 200px; font-family: poppis; font-size: 12px;">A wholesome form owner in
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
                <img src="/icon-folder.svg" style="margin-top: -10px;" alt="">Project Saya
              </span>
            </button>
          </div>
        
            <!--Koleksi -->
          <div class="col">
            <button type="button" class="btn rounded-pill p-2 mx-3 fw-semibold" style="background-color: #F6F7F9; color: #FFBE55; font-size: 22px; width: 190px;">
              <span>
                <img src="/icon-koleksi.svg" alt="">Koleksi

              </span>

            </button>

          </div>
        
            <!--Favorit -->
          <div class="col">
            <button type="button" class="btn rounded-pill p-2  mx-3 fw-semibold" style="background-color: #F6F7F9; color: #FFBE55; font-size: 22px; width: 190px;">
              <span>
                <img src="/icon-favorit.svg" alt="">Favorit

              </span>

            </button>

          </div>

        </div>


      </div>
    </section>

    <!-- Card Project -->
    <section class="container">
      <div class="row row-cols-4 mt-5" style="margin-left: 355px;">
        
        <div class="card col-1" style="width: 14rem;">
          <img src="/design-explore.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="title card-text" style="margin-left: -10px">Judul Portofolio</p>
            <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px; margin-left: -10px;" alt=""><p class="fw-semibold" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: 30px;">Andika Huga</p>
          </div>
        </div>

        <div class="card col-1" style="width: 14rem; margin-left: 30px;">
          <img src="/design-explore.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="title card-text" style="margin-left: -10px">Judul Portofolio</p>
            <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px; margin-left: -10px;" alt=""><p class="fw-semibold" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: 30px;">Andika Huga</p>
          </div>
        </div>

        <div class="card col-1" style="width: 14rem; ">
          <img src="/design-explore.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="title card-text" style="margin-left: -10px">Judul Portofolio</p>
            <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px; margin-left: -10px;" alt=""><p class="fw-semibold" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: 30px;">Andika Huga</p>
          </div>
        </div>


      </div>
    </section>

    

    

  <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>