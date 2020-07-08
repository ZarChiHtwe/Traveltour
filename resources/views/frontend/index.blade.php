@extends('frontend.master')
@section('content')
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(frontendtemplate/images/Bagan.gif);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Welcome to the Travel and Tour</h2>
								<h1>Open to new Experience</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(frontendtemplate/images/bg4.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Discover &amp; Enjoy</h2>
								<h1>Open to new Experience</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(frontendtemplate/images/bg4.jpg);">
				<div class="overlay"></div>
				<div class="container-fluids">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>You are invited</h2>
								<h1>Choose your the Best Travel</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url(frontendtemplate/images/bg5.jpg);">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<h2>Come &amp; enjoy the unforgetable nights</h2>
								<h1>Make a easy site for your travelers</h1>
								<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
							</div>
						</div>
					</div>
				</div>
			</li>	   	
		</ul>
	</div>
</aside>
<div id="colorlib-reservation">
	<div class="container">
		<div class="row">
			<div class="col-md-12 search-wrap">
				<form action="{{route('custompackage')}}" method="GET" class="colorlib-form">
					@csrf
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="adults">From</label>
								<div class="form-field">
									<i class="icon fas fa-arrow-down"></i>
									<select name="from" class="form-control from-select">
										<option style="color: black;">From</option>
										@foreach($locations as $row)
										<option value="{{$row->id}}" style="color: black;">{{$row->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="adults">To</label>
								<div class="form-field">
									<i class="icon fas fa-arrow-down"></i>
									<select name="to" class="form-control to-select">
										<option style="color: black;">To</option>
										@foreach($locations as $row)
										<option value="{{$row->id}}" style="color: black;">{{$row->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Search</button>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="colorlib-services">
	<div class="container">
		<div class="row">
			<div class="col-md-4 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="icon far fa-smile-beam"></i>
					</span>
					<h3>Customer Satisfication</h3>
					<p>We care about ours customer and we treat them like ours own family. Therefore ours customers always comes back to travel with us.</p>
				</div>
			</div>
			<div class="col-md-4 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="icon fas fa-map-marked-alt"></i>
					</span>
					<h3>Varities of Choices</h3>
					<p>We are always expending our business and we have more and more travel routes which will attract ours customer's attention.</p>
				</div>
			</div>
			<div class="col-md-4 animate-box text-center">
				<div class="services">
					<span class="icon">
						<i class="icon fas fa-bus-alt"></i>
					</span>
					<h3>Good Quality Buses</h3>
					<p>We only the best quality bus for ours tours which are good for ours customer health. We always check the bus condition before depature.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--top place start-->
<div class="top_place">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>Top Places to visit</h2>
					<p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach($popular as $row)
			<div class="col-lg-6 col-md-6">
				<div class="single_place">
					<img src="{{$row->photo}}" alt="" class="img-fluid" style="width: 100%; height: 400px;">
					<div class="hover_Text d-flex align-items-end justify-content-between">
						<div class="hover_text_iner">
							<a href="#" class="place_btn">travel</a>
							<h3>{{$row->name}}</h3>
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<a href="#"><i class="fas fa-star"></i></a>
								<a href="#"><i class="fas fa-star"></i></a>
								<a href="#"><i class="fas fa-star"></i></a>
								<a href="#"><i class="fas fa-star"></i></a>
								<span>(210 review)</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach	


		</div>
	</div>
</div>
<div class="container reason" id="colorlib-reason">
	<div class="row">
		<div class="section_tittle text-center">
			<h2>Why you shoud Choose Us</h2>
		</div>
		<div class="col-lg-6 col-md-7 col-sm-12 mt-5">
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
		<div class="col-lg-6 col-md-5 col-sm-12 mt-5">
			<img src="{{asset('frontendtemplate/images/travel.jpg')}}" class="img-fluid" style="height: 500px; width: 100%;">
		</div>
	</div>
</div>


@endsection