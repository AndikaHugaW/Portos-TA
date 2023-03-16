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
        
        <form action="/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
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
      <div id="editProfile" class="">
        <!-- Nama-->
      <div  class="d-flex  justify-content-center" style="margin-top: 100px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="d-flex col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Nama</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" type="text" name="name" value="{{ $user->name }}" style="width: 800px; height: 40px;">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <!-- Email-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Email</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input class="form-control" type="text" name="email" value="{{ $user->email }}" style="width: 800px; height: 40px;">
          @error('email')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <!-- twitter-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Twitter</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input type="text" class="form-control" type="text" name="twitter" value="{{ $user->twitter }}" style="width: 800px; height: 40px;">
          
        </div>
      </div>

      <!-- Instagram-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Instagram</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input type="text" class="form-control" type="text" name="instagram" value="{{ $user->instagram }}" style="width: 800px; height: 40px;">
          @error('instagram')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      
      <!-- Facebook-->
      <div class="d-flex  justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label class="col-form-label fw-semibold" style="font-family: poppins; margin-left: -40px; font-size: 20px;">Facebook</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;">
          <input type="text" class="form-control" type="text" name="facebook" value="{{ $user->facebook }}" style="width: 800px; height: 40px;">
          @error('facebook')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <!-- Bio -->
      <div class="d-flex justify-content-center" style="margin-top: 50px;">
        <div class="col-auto" style="margin-left: -5px;">
          <label for="Bio" class="form-label"  style="font-family: poppins; font-size: 20px;">Bio</label>
        </div>
        <div class="col-auto" style="margin-left: 105px;"> 
          <input class="form-control" type="text" name="bio" value="{{ $user->bio }}" id="exampleFormControlTextarea1" rows="3" style="margin-left: -40px; width: 800px;"></input>
          @error('bio')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      </div>
      

    </form>

  <!-- Footer -->
  <x-footer/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <style>
    #editProfile label {
      width: 100px;
    }
  </style>
</html>