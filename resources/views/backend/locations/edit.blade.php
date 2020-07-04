@extends('backend.master')
@section('content')

<div class="row">
      <div class="col-lg-6">
            <h1 class="h3 mb-2 text-gray-800">Location</h1>
      </div>
      <div class="col-lg-6 text-right"><button class="btn btn-outline-dark ml-auto"><a href="{{route('locations.index')}}"><i class="fas fa-backward" ></i></a></button></div>
</div>
<div class="card shadow mb-4">
     <div class="card-body">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create edit location</h6>
    </div>
    <form action="{{route('locations.update',$location->id)}}" method="POST" >
      @csrf
      @method('PUT')
      <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Enter Name" name="name" value="{{$location->name}}">

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}}</strong>
                  </span>
                  @enderror
            </div>
      </div>
      <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                  <input type="text" class="form-control @error('description') is-invalid @enderror"  placeholder="Enter Description" name="description" value="{{$location->description}}">

                  @error('description')
                  <span class="invalid-feedback" role="alert">
                        <strong>{{ $message}}</strong>
                  </span>
                  @enderror
            </div>
      </div>

      <div class="form-group row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update
                  </button>
            </div>
      </div>
</form>
</div>
</div>
@endsection
