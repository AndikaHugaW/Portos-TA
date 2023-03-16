@extends('layout')

@section('content')
    <h1>File Upload</h1>

    @if(isset($message))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

<<<<<<< HEAD
    @if(isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @endif
=======
    <title>PORTOS</title>
  </head>
  <body style="background-color: #F6F7F9;">

    <!-- Navbar -->
   <x-navbar/>

      <section >

        <!-- Judul Portofolio -->
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
                            <label for="exampleInputEmail1" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Judul</label>
                            <input type="email" placeholder="Nama karyamu" style="font-size: 12px;" class="form-control fw-semibold p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>

                        </div>

                        <!-- Form Jurusan -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Jurusan</label>
                            <select class="form-select" style="height: 52px" id="validationCustom04" required>
                                <option selected disabled value="">Jurusan</option>
                                <option>Produksi Grafika</option>
                                <option>Desain Grafis</option>
                                <option>Animasi</option>
                                <option>Desain Komunikasi Visual</option>
                                <option>Rekayasa Perangkat Lunak</option>
                              </select>
                          </div>

                        </div>

                        <!-- Form Kelas -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Kelas</label>
                            <select class="form-select" style="height: 52px" id="validationCustom04" required>
                                <option selected disabled value="">Kelas</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                          </div>
                        </div>

                        <!-- Form Kategori -->
                        <div class="col">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="d-flex form-label justify-content-start fw-semibold" style="font-family: poppins; ">Kategori</label>
                            <input type="email" placeholder="Kategori project" style="font-size: 12px;" class="form-control fw-semibold p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                            <label for="formFile" class="form-label d-flex justify-content-start fw-semibold" style="font-family: poppins;">Photo 1</label>
                            <input class="form-control" style="height: 200px;" type="file" id="formFile">
                          </div>
                        </div>

                        <div class="col p-2">
                          <div class="mb-3">
                            <label for="formFile2 " class="form-label d-flex justify-content-start fw-semibold">Photo 2</label>
                            <input class="form-control" style="height: 200px;" type="file" id="formFile">
                          </div>
                        </div>

                        <div class="col p-1 pl-2">
                          <div class="mb-3" style="margin-left: 5px;">
                            <label for="formFile3" class="form-label  d-flex justify-content-start fw-semibold">Photo 3</label>
                            <input class="form-control" style="height: 200px; width: 290px;" type="file" id="formFile">
                          </div>
                        </div>

                        <div class="col p-1">
                          <div class="mb-3"  style="margin-left: 5px;">
                            <label for="formFile4 " class="form-label d-flex justify-content-start fw-semibold">Photo 4</label>
                            <input class="form-control" style="height: 200px; width: 290px;" type="file" id="formFile">
                          </div>
                        </div>


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
                  <label for="exampleFormControlInput1" class="form-label d-flex justify-content-start" style="font-family: poppins;">Link</label>
                  <input type="email" class="form-control fw-semibold p-4" style="font-size: 14px; width: 735px; font-family: poppins;" id="exampleFormControlInput1" placeholder="Kirim tautan atau link">
                </div>
              </div>
            </section>

            <section>
              <div class="d-flex justify-content-start p-4" style="margin-left: -825px;">
                <button class="btn rounded fw-bold ps-3 pe-3" style="background-color: #FFBE55; color: #fff; font-family: poppins; font-size: 14px;">Upload</button>
                <button class="btn rounded fw-bold mx-3 ps-3 pe-3" style="background-color: #fff; font-family: poppins; font-size: 14px;">Cancel</button>
              </div>
            </section>



            </div>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c

    <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Choose a file to upload:</label>
            <input type="file" name="file" id="file" class="form-control-file">
        </div>
<<<<<<< HEAD
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
    
=======


      </section>

    <x-footer/>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
