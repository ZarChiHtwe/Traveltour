
@extends('frontend.master')
@section('content')
<div class="body">
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="text-center">Register</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-register">
                    <form method="POST" action="{{route('register')}}">
                       @csrf
                       <h1> register </h1>
                       <label for="name"> name </label> <br>
                       <input type="text" id="name" name="name" placeholder=" name" class="form-control @error('name') is-invalid @enderror"  required autocomplete="name" autofocus>
                       @error('name')
                       <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror


                    <label for="email"> Email </label> <br>
                    <input type="email" id="email" name="email" placeholder=" Email" class="form-control @error('email') is-invalid @enderror"  required autocomplete="name" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password"> Password </label> <br>
                    <input type="password" id="password" name="password" placeholder=" Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password"> Address </label> <br>
                    <input type="text" id="address" name="address" placeholder=" address" > <br>
                    <label for="password"> NRC </label> <br>
                    <input type="text" id="nrc" name="nrc" placeholder=" nrc" > <br>
                    <label for="password"> phone </label> <br>
                    <input type="text" id="phone" name="phone" placeholder=" phone" > <br>
                    <input type="submit" class=" btn registerbutton" value="Register"> <br> 
                    <!--   <button type="submit" class="btn">register</button> -->
                    <a href="{{route('register')}}" style="color: blue;">Already Have an Account!!</a>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
    </div>
</div>
</div>


@endsection


