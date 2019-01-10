@extends('layouts.user')
@section('content')
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Cari Kos</h4>
          
           <select class="btn btn-outline-dark" id="inputGroupSelect01" name="cari">
              <option>Search</option>
              <option>Jakarta Timur</option>
              <option>Jakarta Barat</option>
              <option>Jakarta Selatan</option>
              <option>Jakarta Utara</option>
          </select>
</div>
</div>

<!-- BATAS MULAI -->
          @foreach($datakos as $datakoss)
          <div class="col-md-4">
            <div class="post-entry" style="margin-top: 40px;">
           <img src="{{url('gambar/', $datakoss->gambar_kost)}}" class="img-fluid" style="width: 390px; height: 200px;" >
              <div class="body-text">
                <div class="category">{{$datakoss->wilayah_kost}}</div>
                <h3 class="mb-3"></h3>
                <p class="mb-4"></p>
                <p class="text-danger"><del>Rp.1000000000</del> <span> </span> <span class="text-success">Rp.1.000.000,00</span></p>
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
        Alamat:
        <br>
        Deskripsi :
        <br>
         <form action="{{url('/pesanan/save')}}" method="POST">
         @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Kos</label>
            <input type="text" class="form-control" id="nama_kos" name="nama_kost" required="">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Nomor Kamar</label>
            <input type="number" class="form-control" id="nomor_kamar" name="nomor_kamar" required="">
          </div>
          <div class="form-group">
            <label for="pemesan" class="col-form-label">Nama Pemesan</label>
            <input type="text" name="nama_pemesan" class="form-control" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-outline-danger" value="booking"></input>
      </div>
      </form>
    </div>
  </div>  
</div>
</div>
</div>
</div>
<!-- BATAS AKHIR -->
@endforeach
  <!-- Jarak Gambar -->
        </div>
      </div>

    </section>

    @endsection