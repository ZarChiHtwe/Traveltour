@extends('frontend.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="form-register">
				<form>
					<h1> register </h1>
					<label for="email"> name </label> <br>
					<input type="text" id="name" placeholder=" name" required> <br>
					<label for="email"> Email </label> <br>
					<input type="text" id="email" placeholder=" Email" required> <br>
					<label for="email"> Email </label> <br>
					<input type="text" id="email" placeholder=" Email" required> <br>
					<label for="password"> address </label> <br>
					<input type="text" id="address'" placeholder=" address" required> <br>
					<label for="password"> NRC </label> <br>
					<input type="text" id="nrc'" placeholder=" nrc" required> <br>
					<label for="password"> phone </label> <br>
					<input type="text" id="phone'" placeholder=" phone" required> <br>
					<input type="submit" class="registerbutton"  value="Register"> <br>
					<a href="{{route('register')}}" style="color: blue;">Already Have an Account!!</a>
				</form>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12">
		</div>
	</div>
</div>

@endsection