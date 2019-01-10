@extends('layouts.user')
@section('content')

<section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Photo</h3>
            <h2 class="mb-5"><img src="{{ asset('img/person_2.jpg')}}" style="width: 150px;"></h2>
          <form action="/penginap/update" method="post">
          @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Name</label>
                      <input type="hidden" name="id" value="{{Auth::user()->id}}">
                      <input type="text" id="name" name="name" class="form-control " required="" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="phone">Email</label>
                      <input type="email" id="email" name="email" class="form-control " required="" value="{{ Auth::user()->email }}">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Status</label>
                      <input type="text" id="password" class="form-control " required="" value="user" readonly="true">
                    </div>
                  </div>
                  <div class="row">
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" value="update" class="btn btn-outline-danger">
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