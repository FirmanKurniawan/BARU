@extends('layouts.user')
@section('content')
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Kos kosan</h4>
           
          </div>
        </div>
          <div class="col-md-4">
            <div class="post-entry" style="margin-top: 40px;">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/hero_1.jpg') }} " alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/hero_2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img_1.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <div class="body-text">
                <div class="category">Jaktim</div>
                <h3 class="mb-3">Kos Murah</h3>
                <p class="mb-4">08808080</p>
                <p class="text-danger"><del>Rp.1.200.000,00</del> <span> </span> <span class="text-success">Rp.1.000.000,00</span></p>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
  Deskripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Kost</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Alamat
        <br>
        Deskripsi :
        <br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
                  <div class="col-md-4">
            <div class="post-entry" style="margin-top: 40px;">
             <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel1">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/hero_1.jpg') }} " alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/hero_2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img_1.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <div class="body-text">
                <div class="category">Putri</div>
                <h3 class="mb-3">Kos Murah</h3>
                <p class="mb-4">Jalan Negri Kutub Utara</p>
                <p class="text-danger"><del>Rp.1.200.000,00</del> <span> </span> <span class="text-success">Rp.1.000.000,00</span></p>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
  Deskripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Kost</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nama Kos :
        <br>
        Tipe Ruangan :
        <br>
        Deskripsi :
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry" style="margin-top: 40px;">
             <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel1">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('img/hero_1.jpg') }} " alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/hero_2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('img/img_1.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              <div class="body-text">
                <div class="category">Putri</div>
                <h3 class="mb-3">Kos Murah</h3>
                <p class="mb-4">Jalan Negri Kutub Utara</p>
                <p class="text-danger"><del>Rp.1.200.000,00</del> <span> </span> <span class="text-success">Rp.1.000.000,00</span></p>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
  Deskripsi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi Kost</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Nama Kos :
        <br>
        Tipe Ruangan :
        <br>
        Deskripsi :
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
  
  <!-- Jarak Gambar -->
        </div>
      </div>

    </section>

    @endsection