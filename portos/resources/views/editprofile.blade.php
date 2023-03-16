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
      <div class="d-flex " style="margin-top: 55px; margin-left: 150px;">
        <div class="your-div">
          <img src="/background-edit-profile.jpg" alt="" style="width: 1240px; height: 365px; border-radius: 60px 0 0 0;">
        </div>

        <div class="start" style="margin-left: -1200px; margin-top: 300px;">
            <img class="rounded-circle" src="/profile-3.jpg" alt="" style="width: 140px; height: 140px;">
        </div>

        <div class="" style="margin-top: 380px; margin-left: 30px;">
            <h4 class="fw-bold" style="font-family: poppins; font-size: 24px;">Edit Profil</h4>
            <p class="fw-normal" style="font-family: poppins; font-size: 12px; margin-top: -5px;">Lengkapi Foto dan Data Diri Anda</p>
        </div>
        
        <form method="POST" action="{{ route('profile.update') }}">
          @csrf
          @method('PUT')
        <!-- Button Save dan Cancel -->
        <div class="text-end" style="margin-left: 535px; margin-top: 380px;">
          <button class="btn mt-2 fw-bold rounded-4" style="font-family: poppins; color: #fff; background-color:#FFBE55; width: 120px; height: 40px;">Simpan</button>
          <button class="btn mt-2 fw-bold rounded-4 border border-3" style="font-family: poppins; color: black; background-color:#fff; width: 120px; height: 40px; margin-left: 10px;">Batal</button>
        </div>

      </div>

      <!-- Nama-->
      <div class="d-flex  justify-content-center" style="margin-top: 100px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Nama</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- Email-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Email</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- No HP-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
<<<<<<< HEAD
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Twitter</label>
=======
        <div class="col-auto" style="margin-left: -520px;">
          <h4  class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px; margin-top: -10px;">No HP</h4>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
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

      <!-- No HP-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Instagram</label>
        </div>
<<<<<<< HEAD
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
=======

        <!-- Hari-->
        <div class="btn-group" style="margin-left: 45px;">
          <button class="btn btn-secondary dropdown-toggle text-dark" type="button" style="background-color: #fff;" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Hari
          </button>

          <ul class="dropdown-menu" style="max-height: 300px; overflow-y: scroll;" aria-labelledby="dropdownMenuClickableOutside">
            @for ($i = 1; $i < 32 ;$i++)
            <li><a class="dropdown-item" href="#">{{$i}}</a></li>
            @endfor
          </ul>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
        </div>
      </div>
      
      <!-- No HP-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Facebook</label>
        </div>
<<<<<<< HEAD
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
=======

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
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
        </div>
      </div>

      <!-- Bio -->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -10px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; font-size: 20px;">Bio</label>
        </div>
        <div class="col-auto" style="margin-left: 135px;">
          <input class="form-control" style="width: 800px; height: 200px;">
        </div>
<<<<<<< HEAD
      </div>  
    </form>
=======
      </div>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c

          <!-- Footer -->
          <x-footer/>
           <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
