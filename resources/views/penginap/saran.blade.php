@extends('layouts.user')
@section('content')

<section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5"></h2>
          <form action="{{url('/saran/save')}}" method="post" enctype="multipart/form-data">
          @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Nama</label>
                      <input type="text" id="nama_kost" name="nama" class="form-control " required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Alamat</label>
                      <input type="text" id="nomor_kamar" name="alamat" class="form-control " required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Telepon</label>
                      <input type="number" id="nama_pemesan" name="telepon" class="form-control " required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="nama_pemesan" name="email" class="form-control " required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Deskripsi</label>
                      <textarea type="text" id="nama_pemesan" name="deskripsi" class="form-control " required=""> </textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Gambar</label>
                      <input type="file" id="nama_pemesan" name="gambar" class="form-control " required="">
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" value="Kirim" class="btn btn-danger">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Paragraph</h3>
                <p class="mb-5"><img src="{{ asset('images/img_4.jpg') }}" alt="" class="img-fluid"></p>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias quas, quibusdam provident ea sed, sapiente quo.</p>
                <p class="text-dark">Ullam cumque eveniet, fugiat quas maiores, non modi eos deleniti minima, nesciunt assumenda sequi vitae culpa labore nulla! Cumque vero, magnam ab optio quidem debitis dignissimos nihil nesciunt vitae impedit!</p>
              </div>
        </div>
      </div>
    </section>
  
  
          </div>
        
        </section>
@endsection