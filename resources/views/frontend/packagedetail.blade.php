@extends('frontend.master')
@section('content')

<div class="body">
	<div class="container-fluid banner">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="text-center">Package Detail</h2>
			</div>
		</div>
	</div>

	<div class="container packagedetail">
		<div class="row">
			<form action="{{route('bookings.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<img src="{{asset($package->photo)}}" class="img-fluid" style=" border-radius: 20px;">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<h2>{{$package->name}}</h2><br>
							<p>
								Hotel Name: {{$package->hotels->name}}<br>
								Depature Date: {{$package->depaturedate}}<br>
								Depature Time: {{$package->depaturetime}}<br>
								Duration: {{$package->duration}} Days<br>
								TransportType: {{$package->cars->cartypes->name}}<br>
								Total Price: {{$package->totalprice}}<br>
								Description: {!! $package->description !!}<br>
							</p>
							<input type="hidden" value="{{$package->id}}" name="package">
							<input type="hidden" value="{{$package->totalprice}}" name="totalprice">
							<p class="mr-4">
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-9">
										Amount of People: 
										<input type="number" class="form-control" name="people" style="width: 100px;">
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 text-right">
										<button type="submit" class="button btn">Book</button>
									</div>
								</div>
							</p>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="container random">
		<div class="col-lg-12 col-md-12 col-sm-12">

		</div>
	</div>
</div>
@endsection