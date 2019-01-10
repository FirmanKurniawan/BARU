@extends('layouts.admin')
@section('title')
Kamar Kost Dashboard
@endsection
@section('content')
<body style="background-image: url(http://tremendouswallpapers.com/wp-content/uploads/2014/12/Luxury-Living-Room-2560x1440.jpg); background-repeat: no-repeat;" >
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-danger" style="background-color: #e3f2fd;">Daftar Kamar</div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kost</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi Kamar</th>
                <th scope="col">Diskon</th>
                <th scope="col">Hasil Diskon</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i= 1;
              $kamar = \App\Kamar::all();
              $kost = \App\Kost::all();
              ?>
              @foreach($kamar as $q)
              @foreach($kost as $z)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$z->nama_kost}}</td>
                <td>{{$q->tipe_kamar}}</td>
                <td>{{$q->harga}}</td>
                <td>{{$q->deskripsi_kamar}}</td>
                <td>{{$q->diskon}}%</td>
                <td>{{$q->harga * $q->diskon / 100}}</td>
                <td>
                <a href="{{url('kamar/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"> Edit</i></a>
                 <a href="{{url('kamar/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"> Delete</i></a>
              </td>
              </tr>
              @endforeach
              @endforeach
            </tbody>
          </table>
        <hr>
        <li class="list-group-item float-left">
          <a href="{{url('kamar/add')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus-circle"></i></a>
        </li>
        <li class="list-group-item float-right">
          <a href="{{url('admin/kamar/reportkamar')}}" class="btn btn-success btn-sm"><i class="fa fa-file-export"></i></a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection