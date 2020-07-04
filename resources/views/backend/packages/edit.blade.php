@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-lg-6">
   <h1 class="h3 mb-2 text-gray-800">Package</h1>
 </div>
 <div class="col-lg-6 text-right"><a href="{{route('packages.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
 </div>
</div>
<div class="card shadow mt-4 mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create edit Package</h6>
  </div>
  <div class="card-body">
    <form action="{{route('packages.update',$package->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Enter Name" name="name" value="{{$package->name}}">

        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="CarName" class="col-sm-2 col-form-label">Photo</label>
      <div class="col-sm-10">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Profile</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Profile</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><img src="{{asset($package->photo)}}" class="img-fluid" width="120px">
            <input type="hidden" name="oldphoto" value="{{$package->photo}}">
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><input type="file" multiple="true" name="photo" accept='image/*'></div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Duration</label>
      <div class="col-sm-10">
        <input type="number" class="form-control @error('duration') is-invalid @enderror"   placeholder="Enter Duration" name="duration" value="{{$package->duration}}">

        @error('duration')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Depature Date</label>
      <div class="col-sm-10">
        <input type="date" class="form-control @error('depaturedate') is-invalid @enderror"   placeholder="Enter Depature Date" name="depaturedate" value="{{$package->depaturedate}}">

        @error('depature')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Depature Time</label>
      <div class="col-sm-10">
        <input type="time" class="form-control @error('depaturetime') is-invalid @enderror"   placeholder="Enter Depature Time" name="depaturetime" value="{{$package->depaturetime}}">

        @error('depaturetime')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Package Price</label>
      <div class="col-sm-10">
        <input type="number" class="form-control @error('packageprice') is-invalid @enderror"   placeholder="Enter Package Price" name="packageprice" value="{{$package->packageprice}}">

        @error('packageprice')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('description') is-invalid @enderror"   placeholder="Enter Description" name="description" value="{{$package->description}}">

        @error('description')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="carName" class="col-sm-2 col-form-label">Car</label>
      <div class="col-sm-10">
        <select class="form-control" name="car">
          <optgroup label="Choose Car">
            @foreach($cars as $row)
            <option value="{{$row->id}}" @if($package->car_id == $row->id) {{'selected'}} @endif>{{$row->carnumber}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="hotelName" class="col-sm-2 col-form-label">Hotel</label>
      <div class="col-sm-10">
        <select class="form-control" name="hotel">
          <optgroup label="Choose Hotel">
            @foreach($hotels as $row)
            <option value="{{$row->id}}" @if($package->hotel_id == $row->id) {{'selected'}} @endif>{{$row->name}}</option>
            @endforeach
          </optgroup>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="route" class="col-sm-2 col-form-label">Travel Route</label>
      <div class="col-sm-10">
        <select class="form-control" name="route">
          <optgroup label="Choose Travel Route">
            @foreach($travelroutes as $row)
            <option value="{{$row->id}}" @if($package->route_id == $row->id) {{'selected'}} @endif>{{$row->placefrom_id}} to {{$row->placeto_id}}</option>
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
