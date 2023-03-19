{{-- @dd($data) --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    </style>
  </head>
  
  <body>
    
    <x-navbar/>
    <div class="container" style="margin-left: -200px; margin-top: -30px;">
      <img src="/img-background-explore.svg" style="position:relative; width: 131%; height: 400px;" alt="background-explore">

      <div class="input-group mb-3" style="width: 600px; height: 70px; margin-left: 655px; margin-top: -75px; border-top-width: 5px; border-color: black">
        {{-- <textarea >Pilih Jurusan Yang Anda Cari</textarea> --}}
        <div style=" background-color: white; height: 70px; padding-top: 23px; width: 350px; padding-left: 20px; border-radius: 5px; border-color: black; border-width: 2ch;">
        <p style="font-color: #E4E4E4">Cari Jurusan Yang Anda Inginkan</p>
        </div>
        {{-- <input type="text" class="form-control fw-bold" style="font-size: 14px; color: #ADADAD; width: 200px" placeholder="Search" aria-label="Text input with select"> --}}
        <select class="form-select" style="width: 15px" id="validationCustom04" required>
            <option selected disabled style="width: 15px" value="">Jurusan</option>
            <option style="width: 15px">Produksi Grafika</option>
            <option style="width: 15px">Desain Grafis</option>
            <option style="width: 15px">Animasi</option>
            <option style="width: 15px">Desain Komunikasi Visual</option>
            <option style="width: 15px">Rekayasa Perangkat Lunak</option>
          </select>
      </div>

    </div>

    <div class="text-center" style="margin-top: 100px;">
      <h1 class="fw-bold" style="color:#FFBE55;">Portofolio Website</h1>
      <p class="fw-semibold" style="color: #ADADAD;">1000 inspiring portofolio website work,Designs,Illustration,and Animations</p>

      <div class="d-flex justify-content-center row-cols-auto" style="font-size: 18px;  margin-top: 50px; color: #ADADAD;">
        <div class="col  fw-semibold" style="color: black">Animation</div>
        <div class="col mx-3 fw-semibold">Branding</div>
        <div class="col mx-3 fw-semibold">Illustration</div>
        <div class="col mx-3 fw-semibold">Photography</div>
        <div class="col mx-3 fw-semibold">Mobile</div>
        <div class="col mx-3 fw-semibold">Website</div>
      </div>

    </div>

      <!--Img Kedua -->
      
      <div class="container text-center" style="margin-top: 100px;">
        <div class="row">
          
          <section class="container">
            <div class="row row-cols-4 p-3" style="margin-left: 105px; margin-top: -30px;">
              @foreach($data as $porto)
              <a href="/detailporto/{{$porto->id}}" style="text-decoration: none; margin-right: 3em; margin-top: 2em">
                <div class="card col-1 " style="width: 14rem; ">
                <img src="{{asset('images/' .  $porto->image[0]->images)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="title card-text" style="margin-left: -180px; text-decoration: none; color: black;">{{$porto->judul}}</p>
                  <img class="rounded-circle" src="/profile-3.jpg" style="width: 30px; margin-left: -180px;" alt=""><p class="fw-semibold" style=" font-size: 14px; font-family: poppins; margin-top: -25px; margin-left: -55px; text-decoration: none; color: black;">{{$users->name}}</p>
                </div>
              </div>
            </a>
            @endforeach
          </div>
        </section> 

{{-- 
          <div class="col-md">
            <img src="/img-website-portofolio.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-restaurant-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-restaurant-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div> --}}
      
      {{-- <!--Img Ketiga -->
      <div class="container text-center" style="margin-top: 10px;">
        <div class="row">

          <div class="col-md">
            <img src="/img-website-restaurant-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-portofolio.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-restaurant-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-restaurant-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>


        </div>
        
      </div> --}}
        </div>
        </div>

    <x-footer/>    
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      
  </body>
</html>