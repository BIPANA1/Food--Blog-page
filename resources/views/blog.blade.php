@extends('layout.main')
@section('content')

  <div class="gallery">
    @foreach($auths as $auth)
    <div class="card">
      <div class="container">
        <div class="img-auth">
        <img src="{{asset($auth->Image)}}" alt="Image"  width="50">
        <img src="{{asset($auth->coverImage)}}" alt="Image" width="50">
        </div>
        <div class="heading">
          <h1>{{$auth->title}}</h1>
          <p>{{$auth->postalDate}}</p>
          <p>{{$auth->author}} </p>
          <div>
          <button><a href="/description">Show more </a></button>
          </div>
        </div>
      </div>
    </div>
    @endforeach


  </div>


@endsection