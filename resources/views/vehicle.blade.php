@extends('layouts.app')
@section('extra_style')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js" ></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIFPhH6oRcSaJbVUxmzdG0YbSfdG-TGco&callback=initMap"></script>

<script src="{{ asset('js/vehicle.js') }}"></script>
@endsection
@section('content')
<div class="container">
  <div class="row my-4">
    <div class="col-md-8 px-5" style="background-color: #dff1fe">
      <form method="POST" action="{{ route('vehicle') }}" id="vehicleForm">
      @csrf
        <div class="row my-4">
          <div class="col-md-12">
            <a href="" class="btn btn-vehicle">Add Locations</a>
          </div>
        </div>
        <div class="row my-4 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Vehicle Type</span>
          </div>
          <div class="col-md-5 my-2">
            <div class="select-list">
              <div class="select-list-icon">
                <i class="fas fa-sort-down"></i>
              </div>
              <select id="select_vehicle">
                <option>Select Vehicle</option>
                <option>Vehicle 1</option>
                <option>Vehicle 2</option>
                <option>Vehicle 3</option>
              </select>              
            </div>
          </div>      
        </div>
        <div class="row my-3 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Accessories</span>
          </div>
          <div class="col-md-9 my-2">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="traping" value="option1">
              <label class="form-check-label" for="traping">Tarping</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="food_grade" value="option2">
              <label class="form-check-label" for="food_grade">Food Grade</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" id="protective_gear" value="option2">
              <label class="form-check-label" for="protective_gear">Protective Gear</label>
            </div>
          </div>
        </div>
        <div class="row my-3 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Load Type</span>
          </div>
          <div class="col-md-4 my-2">
            <input type="text" class="form-control input-vehicle"  placeholder="" name="load_type">
          </div>
        </div>
        <div class="row my-3 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Weight(KG)</span>
          </div>
          <div class="col-md-4 my-2">
            <input type="text" class="form-control input-vehicle"  placeholder="" id="weight" name="weight">
          </div>
        </div>
        <div class="row my-3 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Pickup Date</span>
          </div>
          <div class="col-md-5 my-2">
            <input id="datepicker"/>
          </div>
        </div>
        <div class="row my-3 d-flex align-items-center">
          <div class="col-md-3 my-2">
            <span class="mb-0 text-label-1">Packaging</span>
          </div>
          <div class="col-md-5 my-2">
            <div class="select-list">
              <div class="select-list-icon">
                <i class="fas fa-sort-down"></i>
              </div>
              <select id="select_packaging">
                <option>Select Packaging</option>
                <option>Packaging 1</option>
                <option>Packaging 2</option>
                <option>Packaging 3</option>
              </select>              
            </div>
          </div>
          <div class="col-md-4 my-2">
            <button type="button" class="btn btn-vehicle float-right" style="background-color: #f9ff29">Send</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4">
      <div id="map"></div>
    </div>
  </div>
  
</div>
@endsection