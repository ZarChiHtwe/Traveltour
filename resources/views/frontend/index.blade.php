@extends('frontend.master')
@section('content')

<div class="body">
	<div class="container-fluid home-banner">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="text-center">Travel with Let's Travel</h2>
			</div>
		</div>
		<div class="row">
					<!-- <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-center">
						Choose Your Favouriate Plan:
					</div> -->
					<div class="col-lg-12 col-md-12 col-sm-12 mt-2 ">
						<form action="{{route('custompackage')}}" method="GET">
							@csrf
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-12">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 mt-2">
									<select class="form-control" name="from">
										<option>From</option>
										@foreach($locations as $row)
										<option value="{{$row->id}}">{{$row->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12 mt-2">
									<select class="form-control" name="to">
										<option>To</option>
										@foreach($locations as $row)
										<option value="{{$row->id}}">{{$row->name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-12 mt-2 text-center">
									<button type="submit" class="btn w-50">Search</button>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-12">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>	
			<div class="container about">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 text-center mt-5 box-info">
						<span><i class="icon far fa-smile-beam"></i></span>
						<h4 class="mt-2 text-center">Customer Satisfication</h4>
						<p class="text-center" style="line-height: 30px;">We care about ours customer and we treat them like ours own family. Therefore ours customers always comes back to travel with us.</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center mt-5 box-info">
						<span><i class="icon fas fa-map-marked-alt"></i></span>
						<h4 class="mt-2 text-center">Varities of Choices</h4>
						<p class="text-center" style="line-height: 30px;">We are always expending our business and we have more and more travel routes which will attract ours customer's attention.
						</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 text-center mt-5 box-info">
						<span><i class="icon fas fa-bus-alt"></i></span>
						<h4 class="mt-2 text-center">Good Quality Buses</h4>
						<p class="text-center" style="line-height: 30px;">We only the best quality bus for ours tours which are good for ours customer health. We always check the bus condition before depature.
						</p>
					</div>
				</div>
			</div>
			
			<div class="container popular mt-5">
				<h3 class="text-center mb-3" style="color: #000; font-weight: 600;">Porpular Destination</h3>
				<div class="row justify-content-center">
					<div class="col-lg-7 col-md-6 col-sm-12 mt-2"><img src="{{asset('frontendtemplate/image/firework.jpg')}}" class="img-fluid"></div>
					<div class="col-lg-5 col-md-6 col-sm-12 mt-2"><img src="{{asset('frontendtemplate/image/hot.jpg')}}" class="img-fluid"></div>
				</div>
				<div class="row justify-content-center mt-3">
					<div class="col-lg-4 col-md-4 col-sm-12 mt-2"><img src="{{asset('frontendtemplate/image/burma.jpg')}}" class="img-fluid"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 mt-2"><img src="{{asset('frontendtemplate/image/island.jpg')}}" class="img-fluid"></div>
					<div class="col-lg-4 col-lg-4 col-sm-12 mt-2"><img src="{{asset('frontendtemplate/image/taunggyi.jpg')}}" class="img-fluid"></div>
				</div>
			</div>
			<div class="container reason">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 mt-5 text-center">
						<h3>Why you shoud Choose Us</h3>
						<!-- <hr style="width: 40%;"> -->
					</div>
					<div class="col-lg-7 col-md-7 col-sm-12 mt-5">
						<p>
							There are several reasons you should travel with us<br>
							<h4>Valuable Price</h4>
							<p>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 text-center">
										<i class="icon fas fa-hand-holding-usd"></i>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10" style="line-height: 30px;">
										More valuable price than the others with great services including great hotel for the stay and great meals with varities of choices
									</div>
								</div>
							</p>
							<h4>Comfortable Ride</h4>
							<p>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 text-center">
										<i class="icon fas fa-car"></i>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10" style="line-height: 30px;">
										Having the latest models of cars for ours transport, Customers can easily realxed on bus along the road with great on bus services
									</div>
								</div>
							</p>
							<h4>Comfortable Stay</h4>
							<p>
								<div class="row">
									<div class="col-lg-2 col-md-2 col-sm-2 text-center">
										<i class="icon fas fa-home"></i>
									</div>
									<div class="col-lg-10 col-md-10 col-sm-10" style="line-height: 30px;">
										Customers can easily relaxed in the hotel we had chosen because we make a great care while choosing the hotels with valuable prices
									</div>
								</div>
							</p>
						</p>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12 text-center mt-5">
						<img src="{{asset('frontendtemplate/image/pexels.jpeg')}}" class="img-fluid" style="height: 500px;">
					</div>
				</div>
			</div>

		</div>

	</body>
	@endsection