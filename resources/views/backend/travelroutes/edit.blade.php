@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-lg-6">
   <h1 class="h3 mb-2 text-gray-800">Travelroute</h1>
 </div>
 <div class="col-lg-6 text-right"><a href="{{route('travelroutes.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
 </div>
</div>
<div class="card shadow mt-4 mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create new cartype</h6>
  </div>

  <div class="card-body">
    <form action="{{route('travelroutes.update',$travelroute->id)}}" method="POST" >
     @csrf
     @method('PUT')
     <div class="form-group row">
      <label for="cartypeName" class="col-sm-2 col-form-label">PlaceFrom</label>
      <div class="col-sm-10">
        <select class="form-control" name="placefrom">
          <optgroup label="Choose StartPlace">
            @foreach($locations as $row)
            <option value="{{$row->id}}" @if($travelroute->placefrom_id == $row->id) {{'selected'}} @endif>{{$row->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>
    </div>
      <div class="form-group row">
        <label for="cartypeName" class="col-sm-2 col-form-label">PlaceTo</label>
        <div class="col-sm-10">
          <select class="form-control" name="placeto">
            <optgroup label="Choose EndPlace">
              @foreach($locations as $row)
              <option value="{{$row->id}}" @if($travelroute->placeto_id == $row->id) {{'selected'}} @endif>{{$row->name}}</option>
              @endforeach
            </optgroup>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
