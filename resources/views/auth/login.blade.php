@extends('frontend.master')
@section('content')


    <div class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>About Us</h2>
                            <p>home . about us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="body">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-info">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1> Login </h1>

                    <label for="email">{{ __('E-Mail Address') }} </label> <br>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Enter  Email" required autocomplete="email" autofocus > 
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="password"> {{ __('Password') }} </label> <br>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder=" Password" required autocomplete="current-password"> 
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    
                    <button type="submit"  class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <a href="{{route('register')}}" style="color: blue;">Don't Have an account!!</a>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
    </div>
</div>
</div>
@endsection

