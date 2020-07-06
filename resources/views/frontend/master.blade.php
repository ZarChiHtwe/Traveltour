<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/style.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="font.css"> -->
</head>
<body onload="myFunction()" style="margin:0;">

	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">
		<div class="header">
			<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
				<div class="container">
					<a class="navbar-brand" href="#">Navbar</a>
					<button class="navbar-toggler nti" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span>
							<div class="navbar-toggler-icon"></div>
						</span>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link active" href="{{route('index')}}">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="{{route('about')}}">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('package')}}">Package</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{route('contact')}}">Contact Us</a>
							</li>
							<li class="nav-item">
								<a href="{{route('register')}}" class="nav-link">Register</a>
							</li>
							<li class="nav-item">
								<a href="{{route('login')}}" class="nav-link">Login</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>


		
		@yield('content')

		<div class="footer mt-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
						<h4>About Us</h4>
						<p style="line-height: 30px;">Ours is  a small Travel & Tour Company, therefore we can provide the customer with ours own bus and ours own plans of trips. We care about our customer satisfication and healths. Therefore we carefully choose the hotels and restaurants which are in high standards.</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
						<h4>Quick Links</h4>
						<p>
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Package</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 mt-5">
						<h4>Contact Us</h4>
						<p class="mt-3">
							<span><i class="fas fa-phone-alt"></i></span> 097898966, 094654432<br><br>
							<span><i class="fas fa-at"></i></span> letstravel@gmail.com<br><br>
							<span><i class="fas fa-map-marker-alt"></i></span> No.B(3/5), Yadanar Main Road, Malika Housing, Thingangyun Township, Yangon, Myanmar.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	@yield('script')

	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 2000);
		}

		function showPage() {
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display = "block";
		}
	</script>
	<script type="text/javascript" src="{{asset('frontendtemplate/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendtemplate/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendtemplate/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendtemplate/style.js')}}"></script>
	<!-- <script type="text/javascript" src="typed.min.js"></script> -->
</body>
</html>