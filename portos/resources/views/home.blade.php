<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    </style>
  </head>
  <body class="" style="background-color: #F6F7F9; width: 100%">

    <x-navbar/>

      <div class="container text-center">
        <div class="row align-items-center pt-5" style="margin-top: 100px;">
          <div class="col">
            <img src="/illustration home 1.svg">
          </div>

          <div class="col">
            <h2 class="fw-bold">Selamat datang di Website Portofolio</h2>
            <p class="fw-semibold" style="color: #4d4a4a49">Apa itu Portos? silahkan scroll kebawah untuk info lebih lanjut dari website Portos</p>
          </div>

          <div class="col">
            <img src="/illustration home 2.svg">
          </div>

        </div>

      </div>

      <div class="row" style="width: full; justify-content: space-evenly; margin-top: 300px">
        <div class="col" style="max-width: 566px; height: 497px; background-color: #FFBE55; padding-top: 70px; border-radius: 20px">
            <p class="fw-bold text-light fs-2" style="font-size: 30px; text-align: center">Apa itu Portos</p>
                <p class="fw-semibold text-light fs-4" style="margin-top: 30px; text-align: start">
                  Portos adalah kumpulan portofolio yang dikerjakan oleh murid-murid SMK Raden Umar Said Kudus.
                  Para murid dapat mengupload portofolio-nya di Portos, sehingga para Industri dapat merekrut para murid-murid untuk bekerjasama dengan Industri.
                </p>
        </div>
        <div class="col" style="max-width: 566px; height: 497px; background-color: #FFBE55;  padding-top: 70px; border-radius: 20px; padding-left: 20px">
            <p class="fw-bold text-light fs-2" style="text-align: center">Cara mengupload Portofolio</p>
                  <div class="col" style="padding-left: 10px">
                    <h4 class="fw-semibold text-white mt-4">01.  Login dan Register terlebih dahulu</h4>
                    <p class="fw-regular text-white" >Isi data diri anda</p>
                  </div>

                  <div class="col" style="padding-left: 10px">
                    <h4 class="fw-semibold text-white mt-4">02.  Isi data portofolio kamu</h4>
                    <p class="fw-regular text-white" >Isi file judul dan gambar</p>
                </div>

                <div class="col" style="padding-left: 10px">
                  <h4 class="fw-semibold text-white mt-4">03.  Klik upload</h4>
                  <p class="fw-regular text-white" >Tekan tombol upload</p>
                </div>

                  <div class="col" style="padding-left: 10px">
                    <h4 class="fw-semibold text-white mt-4">04.  Tunggu Verifikasi</h3>
                    <p class="fw-regular text-white" style="width: 300px">Cek akun secara berkala untuk mengetahui sudah di verifikasi oleh admin</p>
                  </div>
        </div>
    </div>

  <div class="" style="">
    <h2 class="d-flex justify-content-center fw-bold" style="font-family: poppins; margin-left: -750px; margin-top: 100px;">Jurusan Yang Ada Di SMK RUS</h2>

    <div class="container">

      <div class="d-flex align-items-center justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-4" style="margin-left: -70px; margin-top: 60px;">
        <img src="/btn-jurusan-produksi.svg" style="width: 240px; height: 240px;" alt="Produksi-Grafika">
        <img src="/btn-jurusan-desain-grafika.svg" style="width: 240px; height: 240px;" alt="Desain-Grafika">
        <img src="/btn-jurusan-animasi.svg" style="width: 240px; height: 240px;" alt="Animasi">
        <img src="/btn-jurusan-dkv.svg" style="width: 240px; height: 240px;" alt="Desain-Komunikasi-Visual">
        <img src="/btn-jurusan-rpl.svg" style="width: 240px; height: 240px;" alt="Rekayasa-Perangkat-Lunak">

      </div>

    </div>

    <div class="effect-1" style="margin-top: 100px;">
      <img src="effect-home.svg" style="margin-left: 80px; width: 1350px; height: 255px;" alt="effect-home-1">
    </div>

    <div class="text-center" style="margin-top: 100px; margin-left: 50px;">
      <h2 class="fw-bold" style="font-size: 60px;">Sudah siap upload Portofolio?</h2>
      <p class="fw-semibold" style="font-size: 18px;">Gabung sekarang dengan siswa rus lainnya dan upload portofolio terbaikmu</p>
      <img src="/btn-portofolio.svg"  onclick="location.href='http://127.0.0.1:8000/explore'" style="margin-top: 40px;" alt="Get-started">
    </div>

    <div class="effect-2" style="margin-top: 100px;">
      <img src="effect-2-home.svg" style="margin-left: 80px; width: 1350px; height: 255px;" alt="effect-home-1">
    </div>

  </div>
    <div style="width: 100%;">
    <x-footer/>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
