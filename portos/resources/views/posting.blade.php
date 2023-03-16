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
      
      <section >
        @if(isset($message))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @endif

    <form method="POST" action="{{ route('judul_portos.store') }}" enctype="multipart/form-data">
      @csrf
    
        <!-- Judul Portofolio -->
        <section>
        <div class="row row-cols-3 d-flex text-center">
            <div class="card rounded" style=" margin-left: 30px; margin-top: 30px; width: 790px; height: 325px; border-radius: 30px;">
                <div class="card-body" style="">
                    <h5 class="text-start fw-semibold" style="font-size: 24px; font-family: 'Poppins';">Judul Portofolio</h5>
                    <p class="text-start p-2 fw-semibold" style="font-size: 12px; margin-top: -10px; margin-left: -5px; font-family: 'Poppins'; color: #90A3BF;">Isi formulir dibawah ini</p>
                    <p class="text-end fw-semibold" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -35px; margin-right: 42px; ">Langkah 1 dari 3</p>

                    <div class="container" style="margin-left: -20px;">
                      <div class="row row-cols-2">

                          
                        
                          <!-- Form Judul -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="judul_porto" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Judul</label>
                            <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>
                          </div>

                        </div>

                        <!-- Form Jurusan -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Jurusan</label>
                            <select id="juruan" class="form-control @error('juruan') is-invalid @enderror" name="juruan" required>
                              <option value="">Pilih Jurusan</option>
                              <option value="Produksi Grafika">Produksi Grafika</option>
                              <option value="Desain Grafis">Desain Grafis</option>
                              <option value="Animasi">Animasi</option>
                              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                              <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                          </select>
                          </div>

                        </div>

                        <!-- Form Kelas -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="kelas" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Kelas</label>
                            <select id="kelas" class="form-control @error('kelas') is-invalid @enderror" name="kelas" required>
                              <option value="">Pilih Kelas</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                          </select>
                        </div>
                        </div>

                        <!-- Form Kategori -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="kategori" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Kategori</label>
                            <select id="kategori" class="form-control @error('kategori') is-invalid @enderror" name="kategori" required>
                              <option value="">Pilih Kategori</option>
                              <option>Animation</option>
                              <option>Branding</option>
                              <option>Illustration</option>
                              <option>Photography</option>
                              <option>Mobile</option>
                              <option>Website</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>


            <!-- Import Portofolio -->
            <div class="card col rounded" style=" margin-left: 840px; margin-top: -325px; width: 675px; height: 625px; border-radius: 30px;">
                <div class="card-body" style="">
                    <h5 class="text-start fw-semibold" style="font-size: 24px; font-family: 'Poppins';">Import Portofolio</h5>
                    <p class="text-start p-2 fw-semibold" style="font-size: 12px; margin-top: -10px; margin-left: -5px; font-family: 'Poppins'; color: #90A3BF;">Format foto berupa (png,jpg,gif)</p>
                    <p class="text-end fw-semibold" style="font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -45px;">Langkah 2 dari 3</p>

                    <div class="container">

                      <!-- Import photo 1 --> 
                     
                      <div class="row row-cols-2" style="margin-left: -32px;">
                        <div class="col p-2">
                          <div class="mb-3">
                            <label for="foto" class="form-label d-flex justify-content-start fw-semibold" style="font-family: poppins;">Photo 1</label>
                            <input id="images" type="file" class="form-control-file @error('images') is-invalid @enderror" name="images[]" multiple required>
                          </div>
                        </div>
                        
                        {{-- <!-- Import photo 2 -->
                        <div class="col p-2">
                          <div class="mb-3">
                            <label for="foto" class="form-label d-flex justify-content-start fw-semibold">Photo 2</label>
                            <input name="foto" class="form-control"{{ Session::get('alamat')}} style="height: 200px;" type="file" id="foto">
                          </div>
                        </div>

                        <!-- Import photo 3 -->
                        <div class="col p-1 pl-2">
                          <div class="mb-3" style="margin-left: 5px;">
                            <label for="foto" class="form-label  d-flex justify-content-start fw-semibold">Photo 3</label>
                            <input name="foto" class="form-control"{{ Session::get('alamat')}} style="height: 200px; width: 290px;" type="file" id="foto">
                          </div>
                        </div>

                        <!-- Import photo 4 -->
                        <div class="col p-1">
                          <div class="mb-3"  style="margin-left: 5px;">
                            <label for="foto " class="form-label d-flex justify-content-start fw-semibold">Photo 4</label>
                            <input name="foto" class="form-control"{{ Session::get('alamat')}} style="height: 200px; width: 290px;" type="file" id="foto">
                          </div>
                        </div>
                         --}}

                      </div>

                    </div>
                    

                </div>

            </div>

            
            <!-- Link Portofolio -->
            <section class="card col rounded" style="margin-left: 30px; width: 790px; height: 250px; margin-top: -250px;">
              <div class="card-body" style="">
                <h5 class="fw-semibold d-flex justify-content-start" style="font-family: poppins;">Link Portofolio</h5>
                <p class="fw-semibold d-flex justify-content-start" style="font-family: poppins; font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -5px;">Jika berupa link silahkan isi data berikut</p>
                <p class="fw-semibold d-flex justify-content-end" style="font-family: poppins; font-size: 12px; font-family: 'Poppins'; color: #90A3BF; margin-top: -30px;">Langkah 3 dari 3</p>

                <div class="mb-3 p-3" style="margin-left: -15px;">
                  <label for="link" class="form-label d-flex justify-content-start" style="font-family: poppins;">Link</label>
                  <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required>
                </div>
              </div>
            </section>

            <section>
              <div class="d-flex justify-content-start p-4" style="margin-left: -825px;">
                <button class="btn rounded fw-bold ps-3 pe-3" style="background-color: #FFBE55; color: #fff; font-family: poppins; font-size: 14px;">Upload</button>
                <button class="btn rounded fw-bold mx-3 ps-3 pe-3" style="background-color: #fff; font-family: poppins; font-size: 14px;">Cancel</button>
              </div>
            </section>
          </form>

            


            </div>
          </div>
        
    
      </section>

    <x-footer/>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>