<<<<<<< HEAD
  <!-- Font -->
<style>
   .button-navbar:hover {
        color: blue;
        /* background-color: black */
    }
    /* .button-navbar::after {
=======
<link rel="stylesheet" type="text/css" href="resources/css/navbar.css">
<!-- Font -->
<style>
    .button-navbar:hover {
        background-color: #DDDDDD;

        /* background-color: black */
    }
    .button-navbar::after {
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
        background-color: blue;
    }
    .button-navbar::before {
        background-color: #DDDDDD;
<<<<<<< HEAD
=======
    }
    /* .button-navbar.selected:after, #navnav a:hover:after {
        background-color: black;

        background-color: #dddddd
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
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
          <ul class="navbar-nav" id="navnav">

            <li class="nav-item active" aria-current="page">
<<<<<<< HEAD
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins;" href="/home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins;" href="/explore">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; " href="/profile">Profile</a>
=======
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #ADADAD" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #ADADAD" href="/explore">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold button-navbar" style="font-size: 20px; font-family: poppins; color: #ADADAD" href="/profile">Profile</a>
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
              </li>

          </ul>
          <div class="ms-auto d-flex">
<<<<<<< HEAD
            <img class="px-2 pe-auto button-navbar" style="cursor: pointer;" onclick="location.href='http://127.0.0.1:8000/notification'" src="/notification.svg" alt="notification">
            <div class="dropdown">
              <button class="btn dropdown-toggle button-navbar" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="/profile-3.jpg" style="width: 35px;" alt="">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item"  onclick="location.href='/profile/edit'" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item" onclick="location.href='http://127.0.0.1:8000/sesi'" href="#" style="color: red;">Log Out</a></li>
              </ul>
            </div> 
            <button type="button" onclick="location.href='http://127.0.0.1:8000/posting'" class="btn rounded fw-bold pe-auto" style="margin-left: 10px; margin-top: 5px; height: 40px; font-family: poppins; background-color: #FFBE55; color: #fff; font-size: 14px;">
=======
            <img class="px-2 pe-auto button-navbar" style="cursor: pointer" src="/like.svg" alt="like">
            <img class="px-2 pe-auto button-navbar" style="cursor: pointer" onclick="location.href='http://127.0.0.1:8000/notification'" src="/notification.svg" alt="notification">
            <div class="dropdown button-navbar">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle button-navbar" src="/profile-3.jpg" style="width: 35px;" alt="">
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item button-navbar"  onclick="location.href='http://127.0.0.1:8000/editprofile'" href="#">Edit Profile</a></li>
                <li><a class="dropdown-item button-navbar" onclick="location.href='http://127.0.0.1:8000/login'" href="#" style="color: red;">Log Out</a></li>
              </ul>
            </div>
            <button type="button" onclick="location.href='http://127.0.0.1:8000/upload'" class="btn rounded fw-bold pe-auto" style="margin-left: 10px; margin-top: 5px; height: 40px; font-family: poppins; background-color: #FFBE55; color: #fff; font-size: 14px;">
>>>>>>> 154b858e410a0a68065ff88511b016f49238415c
            <span>
              Upload
            </span>
            </button>
          </div>
        </div>
      </nav>
</div>
