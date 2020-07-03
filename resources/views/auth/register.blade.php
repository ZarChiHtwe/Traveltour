

@extends('frontend.master')
@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nrc" class="col-md-4 col-form-label text-md-right">{{ __('nrc') }}</label>

                            <div class="col-md-6">
                                <input id="nrc" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="form-register">
                <form method="POST" action="{{route('register')}}">
                     @csrf
                    <h1> register </h1>
                    <label for="email"> name </label> <br>
                    <input type="text" id="name" name="name" placeholder=" name" required> <br>

                    <label for="email"> Email </label> <br>
                    <input type="email" id="email" name="email" placeholder=" Email" required> <br>
                    <label for="email"> Password </label> <br>
                    <input type="password" id="password" name="password" placeholder=" Password" required> <br>
                    <label for="password"> Address </label> <br>
                    <input type="text" id="address" name="address" placeholder=" address" required> <br>
                    <label for="password"> NRC </label> <br>
                    <input type="text" id="nrc" name="nrc" placeholder=" nrc" required> <br>
                    <label for="password"> phone </label> <br>
                    <input type="text" id="phone" name="phone" placeholder=" phone" required> <br>
                    <input type="submit" class=" btn registerbutton"  value="Register"> <br> 
                 <!--   <button type="submit" class="btn">register</button> -->
                    <a href="{{route('register')}}" style="color: blue;">Already Have an Account!!</a>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
        </div>
    </div>
</div>

@endsection

