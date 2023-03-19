{{-- @dd($judul_portos->image) --}}
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
  <body style="background-color: #F6F7F9">

    <div class="container">
        <div class="row row-cols-auto justify-item-center position-absolute top-50 start-50 translate-middle"></div>
            <img src="/profile-3.jpg" class="rounded-circle" style="width: 100px; height: 100px; margin-top: 80px;" alt=""><a href=""></a>
            <h5 class="fw-bold" style="margin-top: -80px; margin-left: 120px; font-family: Poppins;">{{$judul_portos->kategori}} - {{$judul_portos->judul}}</h5>
            <p class="fw-semibold" style="margin-top: 10px; margin-left: 120px; font-family: Poppins;">{{$users->name}}</p>  

    </div>

    <d class="justify-item-center position-absolute top-50 start-50 translate-middle" style="margin-top: 400px;">

      <section id="carouselExampleControls" class="carousel slide pt-5" data-bs-ride="carousel" style="width: 1300px; height: 800px; border-radius: 30px;" alt="">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 1300px; height: 800px; border-radius: 30px;">
          <div class="carousel-inner">
            @foreach ($judul_portos->image as $key => $image)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
              {{-- @dump($key) --}}
              <img src="{{asset('images/' . $image->images)}}" class="d-block w-100" style="height: 800px; border-radius: 30px;" alt="...">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
      </section>
      {{-- <img src="" style="width: 1300px; height: 705px; border-radius: 30px;" alt=""> --}}
      <div class="">   
        <p class="fw-semibold" style="width: 500px; font-size: 18px; margin-top: 80px; margin-bottom: 10px; font-family: 'Poppins';">{{$users->name}}</p>
        <p class="fw-semibold" style="width: 500px; font-size: 18px; margin-top: 10px; margin-bottom: 10px; font-family: 'Poppins';">Kelas: {{$judul_portos->kelas}}</p>
        <p class="fw-semibold" style="width: 500px; font-size: 18px; margin-top: 10px; margin-bottom: 10px; font-family: 'Poppins';">Jurusan: {{$judul_portos->juruan}}</p>
      </div>
      
      <p class="fw-medium" style="font-family: Poppins;">Contact with Us<a class="ms-2 text-decoration-none fw-semibold"  style="font-family: Poppins; color:#FFBE55">{{$users->email}}</a></p>
      <p class="fw-medium" style="font-family: Poppins;">Project Link<a class="ms-2 text-decoration-none fw-semibold" href="{{$judul_portos->link}}" style="font-family: Poppins; color:#FFBE55">{{$judul_portos->link}}</a></p>
      <div class="ms-auto" style="margin-top: 10px;">
        <a href="" class="text-decoration-none fw-semibold" style="font-family: Poppins; color:#FFBE55">Twitter</a>
        <a href="" class="text-decoration-none fw-semibold" style="font-family: Poppins; margin-left: 10px; color:#FFBE55">Instagram</a>
        <a href="" class="text-decoration-none fw-semibold" style="font-family: Poppins; margin-left: 10px; color:#FFBE55">Facebook</a>
      </div>
    </div>
{{--     
    <form action="/delete/{id}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form> --}}
  

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

</html>