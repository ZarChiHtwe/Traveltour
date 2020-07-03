@extends('frontend.master')
@section('content')

<div class="body">
		<div class="container-fluid banner">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<h2 class="text-center">About Section</h2>
					</div>
				</div>
			</div>
		<div class="container mt-5 about-page">
		<h3>Our History</h3>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<div class="row">
					<div class="col-lg-6"><img src="{{asset('frontendtemplate/image/pexels2.jpeg')}}" class="img-fluid mt-2"></div>
					<div class="col-lg-6"><img src="{{asset('frontendtemplate/image/pexels3.jpeg')}}" class="img-fluid mt-2"></div>
				</div>
			</div>
		</div>
	</div>
@endsection