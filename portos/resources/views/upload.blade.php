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
    <nav class="navbar navbar-expand-lg navbar-light d-flex mx-5 my-2">
        <h1 class="navbar-brand fw-bold mt-2" style="font-size: 30px; color: #FFBE55" href="#">PORTOS</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
  
            <li class="nav-item">
              <a class="nav-link fw-semibold" style="font-family: 'Poppins'; font-size: 20px; color: #ADADAD" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" style="font-family: 'Poppins'; font-size: 20px; color: #ADADAD" href="#">Explore</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold" style="font-family: 'Poppins'; font-size: 20px; color: #ADADAD" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-semibold" style="font-family: 'Poppins'; font-size: 20px; color: #ADADAD" href="#">Profile</a>
              </li>
          
          </ul>
          <div class="ms-auto">
            <img class="px-2" src="/like.svg" alt="like">
            <img class="px-2" src="/notification.svg" alt="notification">
            <img class="px-2" src="/iconprofile.svg" alt="profile">  
            <img class="px-2" src="/btnupload.svg" alt="btnupload">
            </div> 
        </div>
      </nav>

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
        
      </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>