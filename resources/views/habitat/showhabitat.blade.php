@extends('layout.main')
@section('container')
<div class="card mb-3 rounded">
    <div style="max-height: 350px; overflow:hidden"> 
    </div>
      <div class="card-body text-center bg-dark">
        <link rel="stylesheet" href="mydesign/mystyle.css"> 
        <div class="card-body text-center bg-warning text-dark">
        <h1 class="card-title">{{ $habitat->name }}</h1>
        <div class='container'>
            <img src="https://source.unsplash.com/2000x1000?{{ $habitat->name}}" class="card-img-top mt-4 border border-dark">
        </div>
        <h6 class="mt-2 text-danger"><b>Code: {{ $habitat->code }}</b></h6>
        <h4 class="mt-2">Humidity: {{ $habitat->humidity }}</h4>
        <h5>Size: {{ $habitat->min_size }}-{{ $habitat->max_size }}(km)</h5>
        <div class="container-sm">
            <p style="display: inline-block">{{ $habitat->description }}</p> 
        </div>
        <div class="row rounded">
          <h3 class="card-title mt-4">Animals living in the {{ $habitat->name }}</h3>
          @foreach($habitat->animal as $hab)
          <div class="col-12 col-lg-4 mt-2">
          <div class="p-3 text-center mt-2s">
            
            <a href="{{ route('animals.show', $hab->animal_code) }}" class="text-decoration-none text-light" >
            <img src="https://source.unsplash.com/400x400?{{ $hab->name}}" class="img-thumbnail img-fluid rounded-circle">
            </a>
            <h3 class="mt-4"><a href="{{ route('animals.show', $hab->animal_code) }}" class="text-decoration-none text-light" >{{ $hab->name }}</a></h3>
          </div>
          </div>
          @endforeach
        </div>
    </div>
      </div>
    </div>
@endsection