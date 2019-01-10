@extends('layouts.admin')
@section('title') 
 Tambah Kost
@endsection
@section('navbar')
 Tambah Kost
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center" style="color: red;">
          <div class="col-md-8" style="margin-top: 25px;">
            <div class="card">
            <div class="card-body">
            <form action="{{ url('kost/save')}}" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Nama Kost</label>
                  <input type="text" class="form-control" name="nama_kost" id="formGroupExampleInput"  required>
                </div>
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Jumlah Kamar</label>
                  <input type="number" class="form-control" name="jumlah_kamar" id="formGroupExampleInput"  required>
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-6" style="margin-top: 5%;">
                <label for="formGroupExampleInput">Alamat Kost</label>
                <input type="text" class="form-control" name="alamat_kost" id="formGroupExampleInput"  required>
              </div>
              <div class="form-group col-md-6" style="margin-top: 5%;">
                <label for="formGroupExampleInput">Kontak Kost</label>
                  <input type="text" class="form-control" name="kontak_kost" id="formGroupExampleInput"  required>
              </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Wilayah Kost</label>
                  <input type="text" class="form-control" name="wilayah_kost" id="formGroupExampleInput"  required>
                </div>
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Wilayah Kost</label>
                  <input type="file" class="form-control" name="wilayah_kost" id="formGroupExampleInput"  required>
                </div>
                @csrf
                <button class="btn btn-outline-red" type="submit"><i class="fa fa-plus-square" style="color: red;"></i></button>

              </div>
            </form>
          </div>
          </div>
          </div>
          </div>
          </div>
</div>
@endsection