
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
                <div class="form-register">
                    <form method="POST" action="{{route('register')}}">
                     @csrf
                     <h1> register </h1>
                        <label for="name">{{ __('Name') }}</label><br>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                        <label for="email">{{ __('E-Mail Address') }}</label><br>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                
                        <label for="name" >{{ __('Address') }}</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                   
                        <label for="name" >{{ __('Nrc') }}</label>
                        <input id="nrc" type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" value="{{ old('nrc') }}" required autocomplete="nrc" autofocus>
                        @error('nrc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    
                        <label for="name" >{{ __('phone') }}</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                       
                    <a href="{{route('login')}}" style="color: blue;">Already Have an Account!!</a>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
    </div>
</div>
</div>
@endsection


