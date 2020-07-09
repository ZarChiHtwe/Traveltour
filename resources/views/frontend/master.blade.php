<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel and Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/animate.css')}}">
	<!-- fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/owl.theme.default.min.css')}}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/css/bootstrap-datepicker.css')}}">

	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontendtemplate/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('frontendtemplate/js/modernizr-2.6.2.min.js')}}"></script>
	

</head>
<body>
	
	
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Travel</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								@auth
								<li class="active"><a href="{{route('index')}}">Home</a></li>
								<li><a href="{{route('package')}}">Package</a></li>
								<li><a href="{{route('about')}}">About</a></li>
								<li><a href="{{route('contact')}}">Contact</a></li>
								
								<li class="has-dropdown">
									<a href="#"><i class="fas fa-user"></i></a>
									<ul class="dropdown">
										<li><a href="{{route('logout')}}">Logout</a></li>
									</ul>
								</li>
								@else
								<li class="active"><a href="{{route('index')}}">Home</a></li>
								<li><a href="{{route('package')}}">Package</a></li>
								<li><a href="{{route('about')}}">About</a></li>
								<li><a href="{{route('contact')}}">Contact</a></li>
								<li class="has-dropdown">
									<a href="#"><i class="fas fa-user"></i></a>
									<ul class="dropdown">
										<li><a href="{{route('login')}}">Login</a></li>
										<li><a href="{{route('register')}}">Register</a></li>
									</ul>
								</li>
								@endauth
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		@yield('content')
		<div id="colorlib-subscribe" style="background-image: url(frontendtemplate/images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Sign Up for a Newsletter</h2>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--top place end-->
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Travel and Tour</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Home</a></li>
								<li><a href="#">Package</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3">
						<h4>Recents Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
							<li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
							<li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>No.B(3/5), Yadanar Main Road,<br> Malika Housing,<br> Thingangyun Township, Yangon, Myanmar.</li>
							<li><a href="tel://1234567920">097898966, 094654432</a></li>
							<li><a href="#">letstravel@gmail.com</a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>

		<!-- jQuery -->
		<script src="{{asset('frontendtemplate/js/jquery.min.js')}}"></script>
		<!-- jQuery Easing -->
		<script src="{{asset('frontendtemplate/js/jquery.easing.1.3.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('frontendtemplate/js/bootstrap.min.js')}}"></script>
		<!-- Waypoints -->
		<script src="{{asset('frontendtemplate/js/jquery.waypoints.min.js')}}"></script>
		<!-- Flexslider -->
		<script src="{{asset('frontendtemplate/js/jquery.flexslider-min.js')}}"></script>
		<!-- Owl carousel -->
		<script src="{{asset('frontendtemplate/js/owl.carousel.min.js')}}"></script>
		<!-- Magnific Popup -->
		<script src="{{asset('frontendtemplate/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontendtemplate/js/magnific-popup-options.js')}}"></script>
		<!-- Date Picker -->
		<script src="{{asset('frontendtemplate/js/bootstrap-datepicker.js')}}"></script>
		<!-- Main -->
		<script src="{{asset('frontendtemplate/js/main.js')}}"></script>
		<script src="{{asset('frontendtemplate/custom.js')}}"></script>
	</body>
	</html>