@extends('layout.main')
@section('container')

@if(session()->has('success'))
  <div class="alert alert-primary col-md-2 text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('success') }}</b>
  </div>
  @endif

  @if(session()->has('createdHabitat'))
  <div class="alert alert-primary col-md-2 text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('createdHabitat') }}</b>
  </div>
  @endif

  @if(session()->has('editedHabitat'))
  <div class="alert alert-primary col-md-2 text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <b>{{ session('editedHabitat') }}</b>
  </div>
  @endif


<div class="pull-right me-3">
    <a href="{{ route('habitats.create') }}" class="btn btn-success mb-3">Create new habitat</a>
  </div>
    <table class="table table-warning">
        <thead class= "thead-dark">
      <tr class='border' style="vertical-align:middle">
          <th>Code</th>
          <th>Thumbnail</th>
          <th>Name</th>
          <th>Humidity</th>
          <th>Min(km)</th>
          <th>Max(km)</th>
          <th>Description</th>
          <th>Action</th>
      </tr>
    </thead>
      @foreach ($habitats as $habitat)
      <tr class='border' style="vertical-align:middle">
          <td class='border text-danger'><b>{{ Str::upper($habitat->code)}}</b></td>
          <td class='border'><img src="https://source.unsplash.com/100x100?{{ $habitat->name}}" class="img-thumbnail rounded-circle"></td>
          <td class='border'>{{ $habitat->name}}</td>
          <td class='border'><i>{{ $habitat->humidity}}</i></td>
          <td class='border'>{{ $habitat->min_size}}</td>
          <td class='border'>{{ $habitat->max_size}}</td>
          <td class='border'>{{ $habitat->description}}</td>
          
          <td>                 
                  <form action="/habitats/{{ $habitat->code }}" method="post">
                  <a class="btn btn-info" href="/habitats/{{ $habitat->code }}"><i class="bi bi-eye"></i></a>
                  <a class="btn btn-primary ms-2" href="/habitats/{{ $habitat->code }}/edit"><i class="bi bi-pencil"></i></a>
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-trash-fill"></i></button>
              </form>
          </td>
      </tr>
      @endforeach
  </table>
  <div class="d-flex justify-content-end">
    {{ $habitats->links() }}
    </div>
@endsection