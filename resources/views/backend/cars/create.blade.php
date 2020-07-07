@extends('backend.master')
@section('content')

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <h1 class="h3 mb-2 text-gray-800">Car</h1>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 text-right">
    <a href="{{route('cars.index')}}" class="btn btn-outline-dark"><span><i class="fas fa-backward"></i></span></a>
  </div>
</div>
<div class="card shadow mt-4 mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create new car</h6>
  </div>
  <div class="card-body">
    <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="form-group row">
      <label  class="col-sm-2 col-form-label">CarNumber</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('carnumber') is-invalid @enderror"   placeholder="Enter CarNumber" name="carnumber">

        @error('carnumber')
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
        <label for="cartypeName" class="col-sm-2 col-form-label">CarType</label>
        <div class="col-sm-10">
          <select class="form-control" name="cartype">
            <option>Choose CarType</option>
            @foreach($cartypes as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Status</label>
    <div class="col-sm-10">
     <input type="text" class="form-control @error('status') is-invalid @enderror"  placeholder="Enter Status" name="status">

     @error('status')
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
