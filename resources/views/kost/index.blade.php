@extends('layouts.admin')
@section('title') 
Index Kost
@endsection
@endsection
@section('navbar')
 Daftar Kost
@endsection
@section('content')
<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <table class="table" border="1" style="resize: both;">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Kost</th>
                      <th scope="col">Jumlah Kamar</th>
                      <th scope="col">Alamat Kost</th>
                      <th scope="col">Kontak Kost</th>
                      <th scope="col">Wilayah Kost</th>
                      <th colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody class="thead-light">
                    <?php
                    $i= 1;
                    $kost = \App\Kost::all();
                    ?>
                    @foreach($kost as $q)
                    <tr>
                      <th scope="row">{{$i++}}</th>
                      <td>{{$q->nama_kost}}</td>
                      <td>{{$q->jumlah_kamar}}</td>
                      <td>{{$q->alamat_kost}}</td>
                      <td>{{$q->kontak_kost}}</td>
                      <td>{{$q->wilayah_kost}}</td>
                      <td>
                      <a href="{{ url('kost/edit'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"> Edit</i></a>
                       <a href="{{ url('kost/Delete'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                       class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              <hr>
              <li class="list-group-item float-right">
                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
              </li>
            </div>
          </div>
        </div>
      </div>
      </div>
@endsection