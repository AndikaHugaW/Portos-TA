 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        {{-- <div class="row">
            <div style="width: 1141px; background-color: white">
                <div class="row" style="">
                    <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px">Username</p>
                    <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px; align-self: center">File Size</p>
                    <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px; align-self: flex-end">Actions</p>
                </div>
                <div class="col">
                    <div class="row" style="justify-content: space-around">
                        <div class="row">
                            <p>1</p>
                            <p>Alif Syahputra</p>
                        </div>
                        <div>
                            <p>1.76 MB</p>
                        </div>
                        <div style="justify-content: space-between">
                            <button>Preview</button>
                            <button>Accept</button>
                            <button class="bi bi-trash" style="background-color: red; color:white; width: 77px; height: 31px; border-color: transparent"><i class="fas fa-trash" style="color: white"></i> Delete</button>
                        </div>
                    </div>
                </div>
            </div>
          </div> --}}
        <div class="row" style="width: 100%; background-color: white; padding-left: 150px">
            <div class="col">
                  <div>
                      <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px">Username</p>
                      <div class="row">
                          <p>1</p>
                          <p style="margin-left: 10px">Alif Syaputra</p>
                      </div>
                  </div>
            </div>
            <div class="col">
                  <div>
                      <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px">File Size</p>
                      <p>1000 GB</p>
                  </div>
            </div>
            <div class="col">
                  <div>
                      <p class="fw-bold" style="font-weight: bold; color: #333333; font-size: 20px">Actions</p>
                      <button style="background-color: #DDDDDDDD; color: #444444; border-color: transparent; border-radius: 5px"><i class="fas fa-eye" style="color: #444444; margin-right: 5px"></i>Preview</button>
                      <button style="background-color: #FFB800; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-check" style="color: white; margin-right: 5px"></i>Accept</button>
                      <button style="background-color: red; color: white; border-color: transparent; border-radius: 5px"><i class="fas fa-trash" style="color: white; margin-right: 5px"></i>Delete</button>
                  </div>
            </div>
        </div>
      </div>
    </section>
