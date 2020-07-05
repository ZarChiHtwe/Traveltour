@extends('backend.master')
@section('content')

<div class="row">
    <div class="col-lg-6">
         <h1 class="h3 mb-2 text-gray-800">Location</h1>
   </div>
   <div class="col-lg-6 text-right"><a href="{{route('locations.index')}}" class="btn btn-outline-dark"><i class="fas fa-backward" ></i></a>
   </div>
</div>
<div class="card shadow mt-4 mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Create new Locations </h6>
    </div>
    <div class="card-body">
      <form action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data">
           @csrf
           <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                     <input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Enter Name" name="name">

                     @error('name')
                     <span class="invalid-feedback" role="alert">
                          <strong>{{ $message}}</strong>
                    </span>
                    @enderror
              </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Photo</label>
          <div class="col-sm-10">
            <input type="file" name="photo[]" multiple="true" accept="image/*">
          </div>
        </div>
        <div class="form-group row">
          <label  class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
               <input type="text" class="form-control @error('description') is-invalid @enderror"  placeholder="Enter Description" name="description">

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
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save
      </button>
</div>
</div>
</form>
</div>
</div>
@endsection
