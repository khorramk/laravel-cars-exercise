@extends('welcome')
@section('content')
<p>
    you are now editing car with the id number:
</p>
<div class="row">
    <form class=" w-50" action="/api/cars/modify/{{$id}}">
        @csrf
        <div class="form-group row">
            <label for="cars-make" class="col-sm-2 col-form-label">Make</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="carsMake" id="cars-make" placeholder="Example: Audi" >
            </div>
          </div>
          <div class="form-group row">
            <label for="cars-model" class="col-sm-2 col-form-label">Model</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="carsModel" id="cars-model" placeholder="Example: A3" >
            </div>
          </div>
          <div class="form-group row">
            <label for="cars-colour" class="col-sm-2 col-form-label">Colour</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="carsColour" id="cars-colour" placeholder="Example: Black" >
            </div>
          </div>
          <div class="form-group row">
            <label for="cars-speed" class="col-sm-2 col-form-label">Top Speed</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="carsSpeed" id="cars-speed" placeholder="Example: 300mph" >
            </div>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
