<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  
  <body>
    $items = [
    '1' => [
        '1.1' => [
            '1.1.1', '1.1.2'
        ],
        '1.2' => [
            '1.2.1', '1.2.2'
        ]
    ],
    '2' => [
        '2.1' => [
            '2.1.1', '2.1.2'
        ],
        '2.2' => [
            '2.2.1', '2.2.2'
        ]
    ]
];
    <x-navbar/>
    <div class="container" style="margin-left: -200px; margin-top: -30px;">
      <img src="/img-background-explore.svg" style="margin-left: 190px; width: 1518px; height: 400px;" alt="background-explore">

      <div class="input-group mb-3" style="width: 600px; height: 70px; margin-left: 655px; margin-top: -75px;">
        <input type="text" class="form-control fw-bold" style="font-size: 14px; color: #ADADAD;" placeholder="Search" aria-label="Text input with dropdown button">
        <button class="btn dropdown-toggle" style="background-color: #fff" type="button" data-bs-toggle="dropdown" aria-expanded="false">Jurusan</button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Produksi Grafika</a></li>
          <li><a class="dropdown-item" href="#">Desain Grafika</a></li>
          <li><a class="dropdown-item" href="#">Animasi</a></li>
          <li><a class="dropdown-item" href="#">Desain Komunikasi Visual</a></li>
          <li><a class="dropdown-item" href="#">Rekayasa Perangkat Lunak</a></li>
        </ul>
      </div>

    </div>

    <div class="text-center" style="margin-top: 100px;">
      <h1 class="fw-bold" style="color:#FFBE55;">Portofolio Website</h1>
      <p class="fw-semibold" style="color: #ADADAD;">1000 inspiring portofolio website work,Designs,Illustration,and Animations</p>

    </div>

    <div class="container">
      <div class="row align-items-center" style="font-size: 18px; margin-left: 100px; margin-top: 50px; color: #ADADAD;">
        <div class="col fw-semibold" style="color: black">Animation</div>
        <div class="col fw-semibold">Branding</div>
        <div class="col fw-semibold">Illustration</div>
        <div class="col fw-semibold">Photography</div>
        <div class="col fw-semibold">Mobile</div>
        <div class="col fw-semibold">Website</div>
      </div>

      <div class="container text-center" style="margin-top: 60px;">
        <div class="row">

          <!-- Baris Pertama -->
          @foreach($items as $item)
    @if($loop->first)
        <p>Our first element of the array</p>
    @endif

    <p>{{ $loop->iteration . '/' . $loop->count }}</p>

    @if($loop->last)
        <p>Our last element of the array</p>
    @endif
@endforeach
          {{-- <div class="col-md">
            <img src="/img-website-restaurant-1.svg" onclick="location.href='http://127.0.0.1:8000/detailporto'" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-portofolio.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-illustration-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-3d-neymar.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

        </div>
      </div>

      <!--Img Kedua -->
      <div class="container text-center" style="margin-top: 20px;">
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
            <img src="/img-website-illustration-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-3d-neymar.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

      <!--Img Ketiga -->
      <div class="container text-center" style="margin-top: 20px;">
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
            <img src="/img-website-illustration-1.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>

          <div class="col-md">
            <img src="/img-website-3d-neymar.svg" alt="gambar-1" style="width: 300px; height: 200px;">
            <h5 class="fw-bold text-white mx-3">Restaurant - Mobile Apps</h5>
            <p class="text-white fw-semibold mx-3">Kazuha</p>
          </div>
 --}}

        </div>
        
      </div>

          <!-- Footer -->
          <x-footer/>
  <!-- Footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>