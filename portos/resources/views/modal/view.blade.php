{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form>
    <div class="modal-dialog fade modal-dialog-centered" id="Modalview" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
              </div>
            </div>
          </div>
    </div>
</form> --}}


<!-- Button trigger modal -->
<button data-bs-toggle="modal" data-bs-target="#Modalview" style="background-color: #DDDDDDDD; color: #444444; border-color: transparent; border-radius: 5px"><i class="fas fa-eye" style="color: #444444; margin-right: 5px"></i>Preview</button>

  <!-- Modal -->
  <div class="modal fade" id="Modalview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    {{-- @foreach($images as $image)
                    <img src="{{asset('images/' . $image )}}" class="card-img-top image-thumbnail" alt="...">
                    </div>
                  @endforeach --}}
                  </div>
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

          {{-- @include('modal.caraousel', ["images" => $item->image]) --}}
          {{-- <p>judul : {{$data->judul}}</p>
          <p>Jurusan : {{$data->jurusan}}</p>
          <p>Kategori : {{$data->kategori}}</p>
          <p>Link : {{$data->link}}</p>
        </div> --}}
      </div>
    </div>
  </div>
