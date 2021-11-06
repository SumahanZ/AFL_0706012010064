@extends('layout.main')
@section('container')
<form action="{{ route('habitats.update', $habitat->code) }}" method="post">
    @method('PATCH')
    @csrf
     <div class="d-flex justify-content-center">
         <h3>Habitat Edit Page</h3>
     </div>
    <div class="container-sm bg-warning rounded p-3 mt-4 border border-dark">
        
    <div class="form-group">
        <label class="text-danger font-weight-bold">Habitat Code</label>
        <input type="text" class="form-control {{ $errors->has('code') ? 'error' : '' }}" name="code" id="code" value="{{ $habitat->code }}">

        <!-- Error -->
        @if ($errors->has('code'))
        <div class="error">
            {{ $errors->first('code') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" value="{{ $habitat->name }}">

        @if ($errors->has('name'))
        <div class="error">
            {{ $errors->first('name') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Humidity</label>
        <select class="form-select {{ $errors->has('humidity') ? 'error' : '' }}" name="humidity">
            @if($habitat->humidity == "DRY")
            <option value="{{ $habitat->humidity }}" selected>{{ $habitat->humidity }}</option>
            <option value="WET">WET</option>
            @elseif($habitat->humidity == "WET")
            <option value="{{ $habitat->humidity }}" selected>{{ $habitat->humidity }}</option>
            <option value="DRY">DRY</option>
            @endif
        </select>

        @if ($errors->has('humidity'))
        <div class="error">
            {{ $errors->first('humidity') }}
        </div>
        @endif
      </div>

    <div class="form-group font-weight-bold">
        <label class="text-danger">Min Size(km)</label>
        <input type="text" class="form-control {{ $errors->has('max_size') ? 'error' : '' }}" name="min_size"
            id="min_size" value="{{ $habitat->min_size }}">

        @if ($errors->has('min_size'))
        <div class="error">
            {{ $errors->first('min_size') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Max Size(km)</label>
        <input type="text" class="form-control {{ $errors->has('max_size') ? 'error' : '' }}" name="max_size"
            id="max_size" value="{{ $habitat->max_size }}">

        @if ($errors->has('max_size'))
        <div class="error">
            {{ $errors->first('max_size') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-danger font-weight-bold">Description</label>
        <textarea class="form-control {{ $errors->has('description') ? 'error' : '' }}" name="description" id="description"
            rows="4">{{ $habitat->description }}</textarea>

        @if ($errors->has('description'))
        <div class="error">
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