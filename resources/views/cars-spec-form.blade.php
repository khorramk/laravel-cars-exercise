@extends('welcome')
@section('content')

<div class="bg-secondary">
    <p class="text-warning">
        please add a car specification
    </p>
</div>
<div class="row">
<form class=" w-50" action="api/cars/add">
    @csrf
    <div class="form-group row">
        <label for="cars-make" class="col-sm-2 col-form-label">Make</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="carsMake" id="cars-make" placeholder="Example: Audi" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="cars-model" class="col-sm-2 col-form-label">Model</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="carsModel" id="cars-model" placeholder="Example: A3" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="cars-colour" class="col-sm-2 col-form-label">Colour</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="carsColour" id="cars-colour" placeholder="Example: Black" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="cars-speed" class="col-sm-2 col-form-label">Top Speed</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="carsSpeed" id="cars-speed" placeholder="Example: 300mph" required>
        </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
