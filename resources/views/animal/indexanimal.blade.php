@extends('layout.main')
@section('container')

@if(session()->has('success'))
  <div class="alert alert-primary col-md-2" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('success') }}</b>
  </div>
  @endif

  @if(session()->has('createdAnimal'))
  <div class="alert alert-primary col-md-2" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('createdAnimal') }}</b>
  </div>
  @endif

  @if(session()->has('editedAnimal'))
  <div class="alert alert-primary col-md-2" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('editedAnimal') }}</b>
  </div>
  @endif


<div class="pull-right me-3">
    <a href="{{ route('animals.create') }}" class="btn btn-success mb-3">Create new animal</a>
  </div>
    <table class="table table-warning">
        <thead class= "thead-dark">
      <tr class='border' style="vertical-align:middle">
          <th>No</th>
          <th>Code</th>
          <th>Thumbnail</th>
          <th>Name</th>
          <th>Latin Name</th>
          <th>Species</th>
          <th>Habitat</th>
          <th>Class</th>
          <th>Description</th>
          <th>Action</th>
      </tr>
    </thead>
      @foreach ($animals as $animal)
      <tr class='border' style="vertical-align:middle">
          <td class='border'>{{ $animal->id }}</td>
          <td class='border text-danger'><b>{{ Str::upper($animal->animal_code)}}</b></td>
          <td class='border'><img src="https://source.unsplash.com/100x100?{{ $animal->name}}" class="img-thumbnail rounded-circle"></td>
          <td class='border'>{{ $animal->name}}</td>
          <td class='border'><i>{{ $animal->latin_name}}</i></td>
          <td class='border'>{{ $animal->species}}</td>
          <td>
            <a href="{{ route('habitats.show', $animal->habitats->code) }}">{{$animal->habitats->name}}</a>
          </td>
          <td class='border'>{{ $animal->class}}</td>
          <td class='border'>{{ $animal->description}}</td>
          
          <td>                 
                  <form action="/animals/{{ $animal->animal_code }}" method="post">
                  <a class="btn btn-info" href="{{ route('animals.show', $animal->animal_code) }}" ><i class="bi bi-eye"></i></a>
                  <a class="btn btn-primary mt-2" href="/animals/{{ $animal->animal_code }}/edit"><i class="bi bi-pencil"></i></a>
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-trash-fill"></i></button>
              </form>
          </td>
      </tr>
      @endforeach
  </table>
  <div class="d-flex justify-content-end">
    {{ $animals->links() }}
    </div>
@endsection