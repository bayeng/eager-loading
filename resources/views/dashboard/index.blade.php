@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>
    <div class="row mt-5 flex justify-content-center">  
        <div class="col-lg-4 ">
            <div class="card mb-4 ">
              <div class="card-body text-center">
                <img src="https://i.pinimg.com/originals/69/1b/66/691b66ef334e2c8a96ec9a76cd4589b1.jpg" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{auth()->user()->name}}</h5>
                <p class="text-muted mb-1">{{auth()->user()->username}}</p>
                <p class="text-muted mb-4">{{auth()->user()->email}}</p>
               
              </div>
            </div>
          </div>
      </div>

@endsection