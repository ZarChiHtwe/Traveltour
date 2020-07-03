@extends('frontend.master')
@section('content')

<div class="body">
		<div class="container-fluid banner">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="text-center">Contact Us</h2>
				</div>
			</div>
		</div>
		<div class="container contact">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 mt-5">
					<h4>Contact Us</h4>
					<p class="mt-3">
						<span><i class="fas fa-phone-alt"></i></span> 097898966, 094654432<br><br>
						<span><i class="fas fa-at"></i></span> letstravel@gmail.com<br><br>
						<span><i class="fas fa-map-marker-alt"></i></span> No.B(3/5), Yadanar Main Road, Malika Housing, Thingangyun Township, Yangon, Myanmar.
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
						<button type="submit" class="button btn" style="width: 100%; border-radius: 10px;">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection