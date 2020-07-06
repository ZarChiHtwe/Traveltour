@extends('backend.master')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('summernote/summernote.min.css')}}">
@endsection

@section('content')
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <h1 class="h3 mb-2 text-gray-800">Package</h1>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 text-right">
    <a href="{{route('packages.index')}}" class="btn btn-outline-dark"><span><i class="fas fa-backward"></i></span></a>
  </div>
</div>
<div class="card shadow mt-4 mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Create new Package</h6>
  </div>
  <div class="card-body">
    <form action="{{route('packages.store')}}" method="POST" enctype="multipart/form-data">
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
        <input type="file" name="photo" accept="image/*">
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Duration</label>
      <div class="col-sm-10">
        <input type="number" class="form-control @error('duration') is-invalid @enderror"   placeholder="Enter Duration" name="duration">

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
        <input type="date" class="form-control @error('depaturedate') is-invalid @enderror"   placeholder="Enter Depature Date" name="depaturedate">

        @error('depaturedate')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Depature Time</label>
      <div class="col-sm-10">
        <input type="time" class="form-control @error('depaturetime') is-invalid @enderror"   placeholder="Enter Depature Time" name="depaturetime">

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
        <input type="number" class="form-control @error('packageprice') is-invalid @enderror"   placeholder="Enter Package Price" name="packageprice">

        @error('packageprice')
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
          <option>Choose Car</option>
          @foreach($cars as $row)
          <option value="{{$row->id}}">{{$row->carnumber}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="hotelName" class="col-sm-2 col-form-label">Hotel</label>
      <div class="col-sm-10">
        <select class="form-control" name="hotel">
          <option>Choose Hotel</option>
          @foreach($hotels as $row)
          <option value="{{$row->id}}">{{$row->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="route" class="col-sm-2 col-form-label">Travel Route</label>
      <div class="col-sm-10">
        <select class="form-control" name="route">
          <option>Choose Travel Route</option>
          @foreach($travelroutes as $row)
          <option value="{{$row->id}}">{{$row->fromlocations->name}} to {{$row->tolocations->name}} </option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control @error('description') is-invalid @enderror"   placeholder="Enter Description" name="description">

        @error('description')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message}}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label  class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <textarea id="summernote" class="form-control"></textarea>
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

@section('javascript')
<script type="text/javascript">
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
  </script>
  
<script type="text/javascript" src="{{asset('summernote/summernote.min.js')}}"></script>

@endsection
