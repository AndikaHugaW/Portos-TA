{{-- @dd($data) --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content w-full">
        <div class="container-fluid" style="width: 100%;">
            <!-- Small boxes (Stat box) -->
            <div class="container border border-3"
                style="width: 100%; background-color: white; margin-left: -10px; padding-left: 40px; margin-left: 5px">
                {{-- <div class="row">
                <div class="col">
                    <p class="fw-bold rows-4" style="font-weight: bold; color: #333333; font-size: 20px">Username</p>
                </div>
                <div class="col">
                    <p class="fw-bold rows-4" style="font-weight: bold; color: #333333; font-size: 20px; align-self: center">File Size</p>
                </div>
                <div class="col">
                    <p class="fw-bold rows-4" style="font-weight: bold; color: #333333; font-size: 20px; align-self: flex-end">Actions</p>
                </div>
              </div>
            <div class="row ">
                <div class="col p-2">
                    @foreach ($data as $nama_portos)
                    <p style="margin-left: -20px; font-weight: bold">1<a style="margin-left: 10px; font-weight: 500">{{ $nama_portos->user }}</a></p>
                    @endforeach
                </div>
                <div class="col d-inline-flex p-2">
                    <p style="">1.76 MB</p>
                </div>
                <div class="col">
                    <div>
                        @include('modal.view')
                    </div>
                        @include('modal.success')
                      <button style="background-color: red; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-trash" style="color: white; margin-right: 5px"></i>Delete</button>
                </div>

            </div>
            <hr style="margin-left: -20px; margin-top: -5px"/> --}}
                {{-- <table>
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>pp</td>
                      <td>
                        <a href="{{ route('admin.data.preview', $item->id) }}">Preview</a>
                        <a href="{{ route('admin.data.accept', $item->id) }}">Accept</a>
                        <a href="{{ route('admin.data.delete', $item->id) }}">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table> --}}
                {{-- <div class="row">
                <div class="col d-inline-flex p-2">
                    <p style="margin-left: -20px; font-weight: bold">2<a style="margin-left: 10px; font-weight: 500">Rasyid Nafsyarie</a></p>

                </div>
                <div class="col d-inline-flex p-2">
                    <p>1.76 GB</p>
                </div>
                <div class="col" style="text-align: start ">
                    <button style="background-color: #DDDDDDDD; color: #444444; border-color: transparent; border-radius: 5px"><i class="fas fa-eye" style="color: #444444; margin-right: 5px"></i>Preview</button>
                    <button style="background-color: #FFB800; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-check" style="color: white; margin-right: 5px"></i>Accept</button>
                      <button style="background-color: red; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-trash" style="color: white; margin-right: 5px"></i>Delete</button>
                    </div>
                </div>
                <hr style="margin-left: -20px; margin-top: -5px"/>
            <div class="row">
                <div class="col d-inline-flex p-2">
                    <p style="margin-left: -20px; font-weight: bold">3<a style="margin-left: 10px; font-weight: 500">Fawwaz Abdurrohman</a></p>

                </div>
                <div class="col d-inline-flex p-2">
                    <p>1.76 GB</p>
                </div>
                <div class="col" style="text-align: start ">
                    <button style="background-color: #DDDDDDDD; color: #444444; border-color: transparent; border-radius: 5px"><i class="fas fa-eye" style="color: #444444; margin-right: 5px"></i>Preview</button>
                      <button style="background-color: #FFB800; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-check" style="color: white; margin-right: 5px"></i>Accept</button>
                      <button style="background-color: red; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-trash" style="color: white; margin-right: 5px"></i>Delete</button>
                </div> --}}
                {{-- <img src="{{ $data->images}}" alt=""> --}}
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Nama</th>
                            <th class="col-md-4">Jurusan</th>
                            <th class="col-md-2">Kelas</th>
                            <th class="col-md-6">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->juruan }}</td>
                                <td>{{ $item->kelas }}</td>
                                <td>
                                    <div class="d-inline">
                                        <div class="d-inline">
                                            <button data-bs-toggle="modal" data-bs-target="#Modalview"
                                                style="background-color: #DDDDDDDD; color: #444444; border-color: transparent; border-radius: 5px"><i
                                                    class="fas fa-eye"
                                                    style="color: #444444; margin-right: 5px"></i>Preview</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="Modalview" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div id="carouselExampleControls" class="carousel slide"
                                                                data-bs-ride="carousel" style="">
                                                                <div class="carousel-inner">
                                                                    @foreach ($item->image as $key => $image)
                                                                        <div
                                                                            class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                                                            style="">
                                                                            {{-- @dump($key) --}}
                                                                            <img src="{{ asset('images/' . $image->images) }}"
                                                                                class="d-block w-100"
                                                                                style="max-height: 500px; min-height: 100px; min-width: 100px; max-width: 500px border-radius: 30px;"
                                                                                alt="...">
                                                                            {{-- <div>
                                                                                <p>{{ $item }}</p>
                                                                            </div> --}}
                                                                        </div>
                                                                    @endforeach
                                                                    {{-- <img src="{{ $item->image }}" alt=""> --}}
                                                                </div>
                                                            </div>
                                                            <button class="carousel-control-prev" type="button"
                                                                data-bs-target="#carouselExampleControls"
                                                                data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Previous</span>
                                                            </button>
                                                            <button class="carousel-control-next" type="button"
                                                                data-bs-target="#carouselExampleControls"
                                                                data-bs-slide="next">
                                                                <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="visually-hidden">Next</span>
                                                            </button>
                                                            <p>Nama : {{ $item->user->name }}</p>
                                                            <p>Jurusan : {{ $item->juruan }}</p>
                                                            <p>Kelas : {{ $item->kelas }}</p>
                                                            <p>Kategori : {{ $item->kategori }}</p>
                                                            <p>Link : {{ $item->link }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-inline">
                                                <a data-bs-target="#Modalacc-{{ $i }}"
                                                    data-bs-toggle="modal" class="btn btn-warning btn-sm"><i
                                                        class="fas fa-check"
                                                        style="color: white; margin-right: 5px"></i>Accept</a>
                                                <div class="modal fade" id="Modalacc-{{ $i }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ url('acceptporto/' . $item->id) }}">
                                                                    <button class="d-inline">Yakin</button>
                                                                </form>
                                                                <button class="d-inline"
                                                                    data-bs-dismiss="modal">Tidak</button>
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
                                                <div class="d-inline">
                                                    <form onsubmit="return confirm('Yakin akan menghapus data?')"
                                                        class="d-inline" action="{{ url('admin/' . $item->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" name="submit"
                                                            class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                                                style="color: white; margin-right: 5px"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->withQueryString()->links() }}

            </div>

        </div>
</div>

</div>

</section>
