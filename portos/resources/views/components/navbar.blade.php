<!-- Font -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
</style>

<div>
<nav class="navbar navbar-expand-lg navbar-light d-flex mx-5 my-2">
        <h1 class="navbar-brand fw-bold mt-2" style="font-size: 30px; color: #FFBE55" onclick="location.href='http://127.0.0.1:8000'" >PORTOS</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active" aria-current="page">
              <a class="nav-link fw-bold" style="font-size: 20px; font-family: poppins; color: #232F58" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" style="font-size: 20px; font-family: poppins; color: #232F58" href="/explore">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold" style="font-size: 20px; font-family: poppins; color: #232F58" href="/profile">Profile</a>
              </li>
          
          </ul>
          <div class="ms-auto">
            <img class="px-2 pe-auto" src="/like.svg" alt="like">
            <img class="px-2 pe-auto" onclick="location.href='http://127.0.0.1:8000/notification'" src="/notification.svg" alt="notification">
            <img onclick="location.href='http://127.0.0.1:8000/profile'" class="rounded-circle pe-auto" src="/profile-3.jpg" alt="profile" style="width: 35px;">  
            <button type="button p-2" onclick="location.href='http://127.0.0.1:8000/upload'" class="btn rounded fw-bold pe-auto" style="margin-left: 10px; background-color: #FFBE55; color: #fff; font-size: 14px;">
            <span>
              Upload
            </span>
          </button>
            </div> 
        </div>
      </nav>
</div>