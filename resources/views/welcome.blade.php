@extends('layout.main')
@section('content')
  
  <div class="gallery">
    @foreach($auths as $auth)
    <div class="card">
      <div class="container">
        <div class="img-auth">
        <img src="{{asset($auth->Image)}}" alt="Image"  width="50" height="70">
        <img src="{{asset($auth->coverImage)}}" alt="Image" width="50" height="70">
        </div>
        <div class="heading">
          <h1>{{$auth->title}}</h1>
          <p>{{$auth->postalDate}}</p>
          <p>{{$auth->author}} </p>
        </div>
        <div>
          <button> <a href="/description"> Show more </a> </button>
        </div>
      </div>
    </div>
    @endforeach


  </div>

@endsection