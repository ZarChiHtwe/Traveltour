@extends('backend.master')
@section('content')

<div class="row">
		<div class="col-lg-6">
			<h1 class="h3 mb-2 text-gray-800">Car</h1>
		</div>
		<div class="col-lg-6 text-right"><button class="btn btn-outline-dark ml-auto"><a href="{{route('cars.index')}}"><i class="fas fa-backward" ></i></a></button></div>
	</div>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Create edit car</h6>
            </div>

<!--             @if ($errors->any())
            <div class="alert alert-danger">
            	<ul>
            		@foreach($errors->all() as $error)
            		<li>{{ $error }}</li>
            		@endforeach
            	</ul>
            </div>
            @endif -->

            <form action="{{route('cars.update',$car->id)}}" method="POST" >
            	@csrf
                  @method('PUT')
                  <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">CarNumber</label>
                        <div class="col-sm-10">
                              <input type="text" class="form-control @error('carnumber') is-invalid @enderror"   placeholder="Enter CarNumber" name="carnumber" value="{{$car->carnumber}}">

                            @error('carnumber')
                              <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message}}</strong>
                              </span>
                              @enderror
                        </div>
                  </div>
            	<div class="form-group row">
            		<label  class="col-sm-2 col-form-label">Name</label>
            		<div class="col-sm-10">
            			<input type="text" class="form-control @error('name') is-invalid @enderror"   placeholder="Enter Car Name" name="name" value="{{$car->name}}">

            		    @error('name')
            			<span class="invalid-feedback" role="alert">
            				<strong>{{ $message}}</strong>
            			</span>
            			@enderror
            		</div>
            	</div>
            	<div class="form-group row">
            		<label  class="col-sm-2 col-form-label">Status</label>
            		<div class="col-sm-10">
            			<input type="text" class="form-control @error('status') is-invalid @enderror"  placeholder="Enter Status" name="status" value="{{$car->status}}">

            			@error('status')
            			<span class="invalid-feedback" role="alert">
            				<strong>{{ $message}}</strong>
            			</span>
            			@enderror
            		</div>
            	</div>
 
            	<div class="form-group row">
            		<div class="colsm-2"></div>
            		<div class="col-sm-10">
            			<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update
            			</button>
            		</div>
            	</div>
            </form>
@endsection
