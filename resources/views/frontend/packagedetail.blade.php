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
				<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<img src="{{asset('frontendtemplate/image/image.jpg')}}" class="img-fluid" style=" border-radius: 20px;">
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<h2>Inlay Lake</h2><br>
							<p>
								Depature Date:<br>
								Depature Time:<br>
								Duration:<br>
								TransportType:<br>
								Total Price:<br>
								Description:<br>
							</p>
							<p class="mr-2">
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-5">
										Amount of People: <input type="number" name="people" style="width: 100px;">
									</div>
									<div class="col-lg-7 col-md-7 col-sm-7 text-right">
										<button class="button btn">Book</button>
									</div>
								</div>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container random">
			<div class="col-lg-12 col-md-12 col-sm-12">
				
			</div>
		</div>
	</div>
@endsection