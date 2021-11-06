@extends('layout.main')
@section('container')
<form method="post" action="{{ route('animals.store') }}">
    @csrf
    <div class="d-flex justify-content-center">
        <h3>Animal Create Page</h3>
    </div>
    <div class="container-sm bg-warning rounded p-3 mt-4 border border-dark">
    <div class="form-group">
        <label class="text-danger font-weight-bold">Animal Code</label>
        <input type="text" class="form-control {{ $errors->has('animal_code') ? 'error' : '' }}" name="animal_code" id="animal_code">

        <!-- Error -->
        @if ($errors->has('animal_code'))
        <div class="error text-dark">
            {{ $errors->first('animal_code') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

        @if ($errors->has('name'))
        <div class="error text-dark">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Latin Name</label>
        <input type="text" class="form-control {{ $errors->has('latin_name') ? 'error' : '' }}" name="latin_name" id="latin_name">

        @if ($errors->has('latin_name'))
        <div class="error text-dark">
            {{ $errors->first('latin_name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Species</label>
        <input type="text" class="form-control {{ $errors->has('species') ? 'error' : '' }}" name="species"
            id="species">

        @if ($errors->has('species'))
        <div class="error text-dark">
            {{ $errors->first('species') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Habitat</label>
        <select class="form-select {{ $errors->has('habitat_name') ? 'error' : '' }}" name="habitat_name">
          @foreach($habitats as $habitat)
            <option value="{{$habitat->code}}">{{$habitat->name}}</option>
          @endforeach
        </select>

        @if ($errors->has('habitat_name'))
        <div class="error text-dark">
            {{ $errors->first('habitat_name') }}
        </div>
        @endif
      </div>

      <div class="form-group">
        <label class="text-danger font-weight-bold">Class</label>
        <input type="text" class="form-control {{ $errors->has('class') ? 'error' : '' }}" name="class"
            id="class">

        @if ($errors->has('class'))
        <div class="error text-dark">
            {{ $errors->first('class') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Description</label>
        <textarea class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description"
            rows="4"></textarea>

        @if ($errors->has('description'))
        <div class="error text-dark">
            {{ $errors->first('description') }}
        </div>
        @endif
    </div>
    <div class="container-sm mb-3">
        <input type="submit" name="send" value="Submit" class="btn btn-success btn-block mb-3">
        </div>   
</div>
</form>
@endsection