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
  <body style="background-color: #F6F7F9;">

    <!-- Navbar -->
   <x-navbar/>
      <!-- Card Form Pertama -->
      <div >
        <div class="row row-cols-3 text-center">
            <div class="card rounded" style=" margin-left: 60px; margin-top: 30px; width: 850px; height: 385px; border-radius: 30px;">
                <div class="card-body" style="">
                    <h5 class="text-start fw-semibold" style="font-size: 24px; font-family: 'Poppins';">Judul Portofolio</h5>
                    <p class="text-start mx-1 fw-semibold" style="font-size: 12px; margin-top: -10px; font-family: 'Poppins'; color: #90A3BF;">Isi formulir dibawah ini</p>
                    <p class="text-end fw-semibold" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -35px;">Langkah 1 dari 3</p>

                    <!-- Judul Portofolio -->
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-semibold" style="margin-left: -745px; font-size: 18px; font-family: 'Poppins';">Judul</label>
                            <input type="text" class="form-control rounded-4 fw-semibold" id="disabledTextInput" placeholder="Nama karyamu" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; width: 356px; height: 40px;">
                        </div>
                    </form>

                    <!-- Kelas -->
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-semibold" style="margin-left: -745px; font-size: 18px; font-family: 'Poppins';">Kelas</label>
                            <input type="text" class="form-control rounded-4 fw-semibold" id="disabledTextInput" placeholder="XII RPL 2" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; width: 356px; height: 40px;">
                        </div>
                    </form>

                    <!-- Nama Jurusan -->
                    <form>
                        <div class="mb-3" style="margin-top: -182px; margin-left: 400px;">
                            <label for="exampleInputEmail1" class="form-label fw-semibold" style="margin-left: -320px; font-size: 18px; font-family: 'Poppins';">Jurusan</label>
                            <input type="text" class="form-control rounded-4 fw-semibold" id="disabledTextInput" placeholder="Pilih jurusan" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; width: 356px; height: 40px;">
                        </div>
                    </form>

                    <!-- Kategori -->
                    <form>
                        <div class="mb-3" style="margin-top: 12px; margin-left: 400px;">
                            <label for="exampleInputEmail1" class="form-label fw-semibold" style="margin-left: -320px; font-size: 18px; font-family: 'Poppins';">Kategori</label>
                            <input type="text" class="form-control rounded-4 fw-semibold" id="disabledTextInput" placeholder="Pilih kategori" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; width: 356px; height: 40px;">
                        </div>
                    </form>

                </div>

            </div>


            <!-- Card Form Ke 2 -->
            <div class="card rounded" style=" margin-left: 60px; margin-top: 30px; width: 850px; height: 185px; border-radius: 30px;">
                <div class="card-body" style="">
                    <h5 class="text-start fw-semibold" style="font-size: 24px; font-family: 'Poppins';">Judul Portofolio</h5>
                    <p class="text-start mx-1 fw-semibold" style="font-size: 12px; margin-top: -10px; font-family: 'Poppins'; color: #90A3BF;">Isi formulir dibawah ini</p>
                    <p class="text-end fw-semibold" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -35px;">Langkah 1 dari 3</p>

                    <!-- Link Portofolio -->
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label fw-semibold" style="margin-left: -760px; font-size: 18px; font-family: 'Poppins';">Link</label>
                            <input type="text" class="form-control rounded-4 fw-semibold" id="disabledTextInput" placeholder="Link tautan" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; width: 796px; height: 40px;">
                        </div>
                    </form>

                </div>

            </div>

            <div class="card rounded" style="margin-left: 60px; margin-top: 30px; width: 850px; height: 185px; border-radius: 30px;">
              <div class="mr-auto">
                <h5 class="text-start fw-semibold" style="margin-top: 20px; font-size: ; font-family: 'Poppins';">Import Portofolio</h5>
                <p class="text-start mx-1 fw-semibold" style="">format foto berupa (png,jpg,gif)</p>
                <p class="text-end fw-semibold" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -35px;">Langkah 3 dari 3</p>
                

              </div>

            </div>

                <!-- Button Upload dan Cancel-->
                <div class="container" style="margin-left: -860px; margin-top: 300px;">
                  <div class="row row-cols-auto">
                    <div class="col" style="">
                      <button class="btn fw-bold text-white" style="background-color: #FFBE55;">Upload</button>
                    </div>
  
                    <div class="col" style="">
                      <button class="btn btn-outline-light px-3 fw-bold text-dark" style="background-color: #fff;">Cancel</button>
                    </div>
                  </div>

                </div>

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