  <!-- Font -->
<style>
   .button-navbar:hover {
        background-color: #DDDDDD;
        /* background-color: black */
    }
    /* .button-navbar::after {
        background-color: blue;
    }
    .button-navbar::before {
        background-color: #DDDDDD;
    } */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
</style>

<div>
<nav class="navbar navbar-expand-lg navbar-light d-flex mx-5 my-2">
        <h1 class="navbar-brand fw-bold mt-2" style="font-size: 30px; color: #FFBE55; cursor: pointer;" onclick="location.href='http://127.0.0.1:8000'" >PORTOS</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active" aria-current="page">
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #232F58" href="/home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #232F58" href="/explore">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #232F58" href="/profile">Profile</a>
              </li>
          
          </ul>
          <div class="ms-auto d-flex">
            <img class="px-2 pe-auto button-navbar" style="cursor: pointer;" src="/like.svg" alt="like">
            <img class="px-2 pe-auto button-navbar" style="cursor: pointer;" onclick="location.href='http://127.0.0.1:8000/notification'" src="/notification.svg" alt="notification">
            <div class="dropdown">
              <button class="btn dropdown-toggle button-navbar" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="/profile-3.jpg" style="width: 35px;" alt="">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item"  onclick="location.href='http://127.0.0.1:8000/editprofile'" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" onclick="location.href='http://127.0.0.1:8000/sesi'" href="#" style="color: red;">Log Out</a></li>
              </ul>
            </div> 
            <button type="button" onclick="location.href='http://127.0.0.1:8000/upload'" class="btn rounded fw-bold pe-auto" style="margin-left: 10px; margin-top: 5px; height: 40px; font-family: poppins; background-color: #FFBE55; color: #fff; font-size: 14px;">
            <span>
              Upload
            </span>
            </button>
          </div> 
        </div>
      </nav>
</div>