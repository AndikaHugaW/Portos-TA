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

        <!-- Button Save dan Cancel -->
        <div class="align-content-end" style="margin-left: 640px; margin-top: 380px;">
          <button type="button p-2 ps-2 pe-2" class="btn rounded fw-bold pe-auto" style="margin-left: 10px; font-family: poppins; background-color: #FFBE55; color: #fff; font-size: 14px;">
            <span>
              Simpan
            </span>
          </button>
            <button type="button p-2" class="btn rounded border fw-bold pe-auto" style="margin-left: 10px; font-family: poppins; background-color: #FFf; font-size: 14px;">
              <span>
                Cancel
              </span>
            </button>
        </div>

      </div>

      <!-- Nama-->
      <div class="d-flex  justify-content-center" style="margin-top: 100px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="d-flex col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Nama</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- Email-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Email</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
        </div>
      </div>

      <!-- No HP-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">No HP</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" style="width: 800px; height: 40px;">
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
          
          <ul class="dropdown-menu" style="max-height: 300px; overflow-y: scroll;" aria-labelledby="dropdownMenuClickableOutside">  
            @for ($i = 1; $i < 32 ;$i++)
            <li><a class="dropdown-item" href="#">{{$i}}</a></li>  
            @endfor
          </ul>
        </div>

        <!--Tanggal-->
        <div class="btn-group" style="margin-left: 30px;">
          <button class="btn btn-secondary dropdown-toggle text-dark" type="button" style="background-color: #fff;" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
            Bulan
          </button>
          <ul class="dropdown-menu" style="max-height: 300px; overflow-y: scroll;" aria-labelledby="dropdownMenuClickableOutside">
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
          <ul class="dropdown-menu" style="max-height: 300px; overflow-y: scroll;" aria-labelledby="dropdownMenuClickableOutside">
            <li><a class="dropdown-item" href="#">2000</a></li>
            <li><a class="dropdown-item" href="#">2001</a></li>
            <li><a class="dropdown-item" href="#">2002</a></li>
            <li><a class="dropdown-item" href="#">2003</a></li>
            <li><a class="dropdown-item" href="#">2004</a></li>
            <li><a class="dropdown-item" href="#">2005</a></li>
            <li><a class="dropdown-item" href="#">2006</a></li>
            <li><a class="dropdown-item" href="#">2007</a></li>
            <li><a class="dropdown-item" href="#">2008</a></li>
            <li><a class="dropdown-item" href="#">2009</a></li>
            <li><a class="dropdown-item" href="#">2010</a></li>
            <li><a class="dropdown-item" href="#">2011</a></li>
            <li><a class="dropdown-item" href="#">2012</a></li>
            <li><a class="dropdown-item" href="#">2013</a></li>
            <li><a class="dropdown-item" href="#">2014</a></li>
            <li><a class="dropdown-item" href="#">2015</a></li>
            <li><a class="dropdown-item" href="#">2016</a></li>
            <li><a class="dropdown-item" href="#">2017</a></li>
            <li><a class="dropdown-item" href="#">2018</a></li>
            <li><a class="dropdown-item" href="#">2019</a></li>
            <li><a class="dropdown-item" href="#">2020</a></li>
            <li><a class="dropdown-item" href="#">2021</a></li>
            <li><a class="dropdown-item" href="#">2022</a></li>
            <li><a class="dropdown-item" href="#">2023</a></li>
          </ul>
        </div>
      </div>

      <!-- Bio -->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -30px;">
          <label class="col-form-label fw-semibold" style="margin-left: -10px;font-family: poppins; font-size: 20px;">Bio</label>
        </div>
        <div class="col-auto" style="margin-left: 135px;">
          <input class="form-control" style="width: 800px; height: 200px;">
        </div>
      </div>  

        <!-- Footer -->
        <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>