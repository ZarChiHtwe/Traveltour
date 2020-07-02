@extends('frontend.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="form-info">
				<form>
					<h1> Login </h1>
					<label for="email"> Email </label> <br>
					<input type="text" id="email" placeholder="Enter  Email" required> <br>
					<label for="password"> Password </label> <br>
					<input type="password" id="password" placeholder=" Password" required> <br>
					<input type="submit"  value="Login" class="loginbutton"> <br>
					<a href="{{route('register')}}" style="color: blue;">Don't Have an account!!</a>
				</form>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12">
		</div>
	</div>
</div>

@endsection