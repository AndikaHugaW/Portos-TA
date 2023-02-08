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

    <title>PORTOS</title>
  </head>
  <body>
    
    <x-navbar/>

      <!-- Background Edit Profile-->
      <div class="d-flex " style="margin-top: 55px; margin-left: 235px;">
        <div class="your-div">
          <img src="/background-edit-profile.jpg" alt="" style="width: 1240px; height: 365px; border-radius: 60px 0 0 0;">
        </div>

        <div class="start" style="margin-left: -1200px; margin-top: 300px;">
            <img class="rounded-circle" src="/profile-3.jpg" alt="" style="width: 140px; height: 140px;">
        </div>

        <div class="" style="margin-top: 380px; margin-left: 30px;">
            <h4 class="fw-bold" style="font-family: poppins; font-size: 24px;">Edit Profile</h4>
            <p class="fw-normal" style="font-family: poppins; font-size: 12px; margin-top: -5px;">Update your photo and personal details</p>
        </div>

        <!-- Button Save dan Cancel -->
        <div class="text-end" style="margin-left: 535px; margin-top: 380px;">
          <button class="btn mt-2 fw-bold rounded-4" style="font-family: poppins; color: #fff; background-color:#FFBE55; width: 120px; height: 40px;">Upload</button>
          <button class="btn mt-2 fw-bold rounded-4 border border-3" style="font-family: poppins; color: black; background-color:#fff; width: 120px; height: 40px; margin-left: 10px;">Cancel</button>
        </div>

      </div>

      <!-- Nama-->
      <div class="d-flex  justify-content-center" style="margin-top: 100px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label for="inputPassword6" class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Nama</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- Email-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label for="inputPassword6" class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Email</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- No HP-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -520px;">
          <h4  class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px; margin-top: -10px;">No HP</h4>
        </div>
        <div class="form-check form-check-inline" style="margin-left: 100px;">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Wanita</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
          <label class="form-check-label" for="inlineRadio3">Lainnya</label>
        </div>
      </div>

      <!-- Tanggal Lahir-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px; margin-left: -510px;">
        <div class="col-auto" style="">
          <h4 class="col-form-label fw-semibold mt-1" style="font-family: poppins; font-size: 18px; margin-top: -10px;">Tanggal Lahir</h4>
        </div>

        <!-- Hari-->
        <div class="btn-group" style="margin-left: 45px;">
          <button class="btn btn-secondary dropdown-toggle text-dark" type="button" style="background-color: #fff;" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Hari
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
            <li><a class="dropdown-item" href="#">1</a></li>
            <li><a class="dropdown-item" href="#">2</a></li>
            <li><a class="dropdown-item" href="#">3</a></li>
            <li><a class="dropdown-item" href="#">4</a></li>
            <li><a class="dropdown-item" href="#">5</a></li>
            <li><a class="dropdown-item" href="#">6</a></li>
            <li><a class="dropdown-item" href="#">7</a></li>
            <li><a class="dropdown-item" href="#">8</a></li>
            <li><a class="dropdown-item" href="#">9</a></li>
            <li><a class="dropdown-item" href="#">10</a></li>
            <li><a class="dropdown-item" href="#">11</a></li>
            <li><a class="dropdown-item" href="#">11</a></li>
            <li><a class="dropdown-item" href="#">12</a></li>
            <li><a class="dropdown-item" href="#">13</a></li>
            <li><a class="dropdown-item" href="#">14</a></li>
            <li><a class="dropdown-item" href="#">15</a></li>
            <li><a class="dropdown-item" href="#">16</a></li>
            <li><a class="dropdown-item" href="#">17</a></li>
            <li><a class="dropdown-item" href="#">18</a></li>
            <li><a class="dropdown-item" href="#">19</a></li>
            <li><a class="dropdown-item" href="#">20</a></li>
            <li><a class="dropdown-item" href="#">21</a></li>
            <li><a class="dropdown-item" href="#">22</a></li>
            <li><a class="dropdown-item" href="#">23</a></li>
            <li><a class="dropdown-item" href="#">24</a></li>
            <li><a class="dropdown-item" href="#">25</a></li>
            <li><a class="dropdown-item" href="#">26</a></li>
            <li><a class="dropdown-item" href="#">27</a></li>
            <li><a class="dropdown-item" href="#">28</a></li>
            <li><a class="dropdown-item" href="#">29</a></li>
            <li><a class="dropdown-item" href="#">30</a></li>
            <li><a class="dropdown-item" href="#">31</a></li>
          </ul>
        </div>

        <!--Tanggal-->
        <div class="btn-group" style="margin-left: 30px;">
          <button class="btn btn-secondary dropdown-toggle text-dark" type="button" style="background-color: #fff;" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Bulan
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
            <li><a class="dropdown-item" href="#">Januari</a></li>
            <li><a class="dropdown-item" href="#">Februari</a></li>
            <li><a class="dropdown-item" href="#">Maret</a></li>
            <li><a class="dropdown-item" href="#">April</a></li>
            <li><a class="dropdown-item" href="#">Mei</a></li>
            <li><a class="dropdown-item" href="#">Juni</a></li>
            <li><a class="dropdown-item" href="#">Juli</a></li>
            <li><a class="dropdown-item" href="#">Agustus</a></li>
            <li><a class="dropdown-item" href="#">September</a></li>
            <li><a class="dropdown-item" href="#">Oktober</a></li>
            <li><a class="dropdown-item" href="#">November</a></li>
            <li><a class="dropdown-item" href="#">Desember</a></li>
          </ul>
        </div>

        <!--Tahun-->
        <div class="btn-group" style="margin-left: 30px;">
          <button class="btn btn-secondary dropdown-toggle text-dark" type="button" style="background-color: #fff;" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Tahun
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
            <li><a class="dropdown-item" href="#">Menu item</a></li>
          </ul>
        </div>
      </div>

      <!-- Bio -->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -10px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Bio</label>
        </div>
        <div class="col-auto" style="margin-left: 135px;">
          <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" style="width: 800px; height: 200px;">
        </div>
      </div>  

          <!-- Footer -->
  <footer class="text-black" style="margin-top: 150px; background-color: #fff">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-4 mb-4 mb-md-0 " style="margin-left: -90px;">
          <h5 class="text-uppercase fw-bold">PORTOS</h5>
          <p class="fw-semibold" style="color: #ADADAD;">Our vision is to provide convenience and help increase your sales business.</p>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-2 mb-4 mb-md-0">
          <h5 class="fw-bold">Tentang</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <p class="fw-semibold text-secondary">How it works</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Featured</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Partnership Business</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Relation</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-2 mb-4 mb-md-0">
          <h5 class="fw-bold">Komunitas</h5>

          <ul class="list-unstyled mt-2">
            <li>
              <p class="fw-semibold text-secondary">Events</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Blog</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Podcast</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Invite a friend</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-2 mb-4 mb-md-0">
          <h5 class="fw-bold">Sosial Media</h5>

          <ul class="list-unstyled mt-2">
            <li>
              <p class="fw-semibold text-secondary">Discord</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Instagram</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">Twitter</p>
            </li>
            <li>
              <p class="fw-semibold text-secondary">facebook</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-start p-3 mx-3 fw-bold" style="background-color: #ffffff;">
      ©2022 PORTOS. All rights reserved
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>