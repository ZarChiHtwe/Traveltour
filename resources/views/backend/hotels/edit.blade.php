@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-lg-6">
   <h1 class="h3 mb-2 text-gray-800">Hotel</h1>
 </div>
 <div class="col-lg-6 text-right"><a href="{{route('hotels.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
 </div>
</div>
<div class="card shadow mt-4 mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> edit hotel</h6>
  </div>
  <div class="card-body">
    <form action="{{route('hotels.update',$hotel->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Enter Name" name="name" value="{{$hotel->name}}">

        @error('carnumber')
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
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            @php
            $photo=json_decode($hotel->photo);
            @endphp
            @foreach($photo as $photos)
            <img src="{{asset($photos)}}" class="img-fluid" style="width: 120px; height: 120px;">
            @endforeach
            <input type="hidden" name="oldphoto" value="{{$hotel->photo}}">
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><input type="file" multiple="true" name="photo[]" accept='image/*'></div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">price</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('price') is-invalid @enderror"   placeholder="Enter CarNumber" name="price" value="{{$hotel->price}}">

        @error('price')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('address') is-invalid @enderror"   placeholder="Enter Address" name="address" value="{{$hotel->address}}">

        @error('price')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    
    <div class="form-group row">
      <label for="cartypeName" class="col-sm-2 col-form-label">Location</label>
      <div class="col-sm-10">
        <select class="form-control" name="location">
          <optgroup label="Choose Location">
            @foreach($locations as $row)
            <option value="{{$row->id}}" @if($hotel->location_id == $row->id) {{'selected'}} @endif>{{$row->name}}</option>
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
