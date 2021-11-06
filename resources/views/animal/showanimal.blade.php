@extends('layout.main') 
@section('container')
<div class="card mb-3 rounded">
    <div style="max-height: 350px; overflow:hidden"> 
    </div>
      <div class="card-body text-center bg-dark rounded">
        <div class="card-body text-center bg-warning text-dark rounded">
          <div class='container'>
            <img src="https://source.unsplash.com/2000x1000?{{ $animal->name}}" class="card-img-top mt-4">
        </div>
        <h1 class="card-title">{{ $animal->name }}</h1>
        <h5 class="mt-2 text-danger"><b>Code: {{ $animal->animal_code }}</b></h5>
        <h5 class="mt-2">Latin: <i>{{ $animal->latin_name }}</i></h5>
        <h5 class="mt-2">Species: {{ $animal->species}}</h5>
        <h5 class="mt-2">Habitat: {{ $animal->habitats->name}}</h5>
        <h5 class="mt-2">Class: {{ $animal->class}}</h5>
        <div class="container-sm">
          <h6 style="display: inline-block">{{ $animal->description }}</h6> 
      </div>
    </div>
      </div>
    </div>
@endsection