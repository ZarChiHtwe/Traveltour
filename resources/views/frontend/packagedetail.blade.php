@extends('frontend.master')
@section('content')

<div class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item text-center">
						<h2>PackagesDetail</h2>
						<p>home . Packagesdetail</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container packagedetail" id="colorlib-detail">
	<div class="row">
		<form action="{{route('bookings.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12">
					<img src="{{asset($package->photo)}}" class="img-fluid" style=" border-radius: 20px;" width="100%">
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
					<h2>{{$package->name}}</h2><br>
					<p>
						Depature Date: {{$package->depaturedate}}<br>
						Depature Time: {{$package->depaturetime}}<br>
						Duration: {{$package->duration}}<br>
						TransportType: {{$package->cars->cartypes->name}}<br>
						Total Price:{{$package->totalprice}}<br>
						Description: {!! $package->description !!}<br>
					</p>
					<input type="hidden" value="{{$package->id}}" name="package">
					<input type="hidden" value="{{$package->totalprice}}" name="totalprice">
					<p class="mr-2">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-5">
								Amount of People: <input type="number" name="people" style="width: 100px;">
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 text-right">
								@auth
									<button type="submit" class="button btn">Book</button>
								@else
									<a href="{{route('login')}}" type="submit" data-toogle="tooltip" dataplacement="top" title="If you want to book, you need to be our member" class="button btn">Book</a>
								@endauth
							</div>
						</div>
					</p>
				</div>
			</div>
		</div>
		</form>
		
	</div>
</div>

@endsection