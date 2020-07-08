@extends('frontend.master')
@section('content')

<div class="breadcrumb breadcrumb_bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb_iner">
					<div class="breadcrumb_iner_item text-center">
						<h2>Contact Us</h2>
						<p>home . contact us</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container" id="colorlib-contact">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
			<h3>Contact Us</h3>
			<p class="mt-3">
				<span><i class="icon fas fa-phone"></i></span> 097898966, 094654432<br><br>
				<span><i class="icon fas fa-at"></i></span> letstravel@gmail.com<br><br>
				<span><i class="icon fas fa-map-marker-alt"></i></span> No.B(3/5), Yadanar Main Road, Malika Housing, Thingangyun Township, Yangon, Myanmar.
			</p>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Name</label>
					<input type="text" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Description</label>
					<textarea type="text" class="form-control" rows="5"></textarea>
				</div>
				<button type="submit" class="button btn" style=" border-radius: 10px; background-color: #65acd0;">Submit</button>
			</form>
		</div>
	</div>
</div>
	
@endsection