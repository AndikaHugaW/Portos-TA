<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
{{-- <button data-bs-toggle="modal" data-bs-target="ModalSuccess" style="background-color: #FFB800; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-check" style="color: white; margin-right: 5px"></i>Accept</button> --}}

  <!-- Modal -->
  {{-- <div class="modal fade" id="ModalSuccess" tabindex="-1" aria-labelledby="ModalSuccesslLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="/Success.svg" alt="">
        </div>
      </div>
    </div>
  </div> --}}


  <button data-bs-toggle="modal" data-bs-target="#ModalSuccess" style="background-color: #FFB800; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-check" style="color: white; margin-right: 5px"></i>Accept</button>

  <!-- Modal -->
  <div class="modal fade" id="ModalSuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @include('modal.caraousel')
          <p>Jurusan</p>
          <p>Kategori</p>
        </div>
      </div>
    </div>
  </div>
