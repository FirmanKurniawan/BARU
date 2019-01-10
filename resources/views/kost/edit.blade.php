@extends('layouts.admin')
@section('title') 
Edit Kost
@endsection
@section('navbar')
 Ubah Data Kost
@endsection
@section('content')
<div class="container" >
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
               <form action="{{url('kost/update')}}" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Nama Kost</label>
                  <input type="text" class="form-control" name="nama_kost" id="formGroupExampleInput" 
                  placeholder="Nama Kost" value="{{$kost->nama_kost}}" required>
                </div>
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Jumlah Kamar</label>
                  <input type="number" class="form-control" name="jumlah_kamar" id="formGroupExampleInput" 
                  placeholder="Jumlah Kamar" value="{{$kost->jumlah_kamar}}" required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Alamat Kost</label>
                  <input type="text" class="form-control" name="alamat_kost" id="formGroupExampleInput" 
                  placeholder="Alamat Kost" value="{{$kost->alamat_kost}}" required>
                </div>
                <div class="form-group col-md-6" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Kontak Kost</label>
                  <input type="text" class="form-control" name="kontak_kost" id="formGroupExampleInput" 
                  placeholder="Kontak Kost" value="{{$kost->kontak_kost}}" required>
                </div> 
                </div>               
                <div class="form-group" style="margin-top: 5%;">
                  <label for="formGroupExampleInput">Wilayah Kost</label>
                  <input type="text" class="form-control" name="wilayah_kost" id="formGroupExampleInput" 
                  placeholder="Wilayah Kost" value="{{$kost->wilayah_kost}}" required>
                </div>
                @csrf
                <input type="hidden" name="id" value="{{$kost->id}}">
                <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection