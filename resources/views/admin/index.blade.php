@extends('layouts.admin')
@section('title')
Admin Dasboard
@endsection
@section('content')
<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form>
                <br>
                <br>
                <h3>Welcome, {{Auth::user()->name}}</h3>
                <br>
                <br>
                <h5>Silahkan pilih menu di sidebar</h5>
            </form>
</div>
@endsection