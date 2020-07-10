

@extends('frontend.master')
@section('content')


<div class="body">

    <div class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Register</h2>
                            <p>home . register</p>
                        </div>
                    </div>
                </div>
            </div>
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
                   <h1>Register</h1>
                   <div class="form-group">
                       <label for="name">{{ __('Name') }}</label><br>
                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                       @error('name')
                       <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                   <label for="email">{{ __('E-Mail Address') }}</label><br>
                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                   @error('email')
                   <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" >{{ __('Address') }}</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" >{{ __('NRC') }}</label>
                <input id="nrc" type="text" class="form-control @error('nrc') is-invalid @enderror" name="nrc" value="{{ old('nrc') }}" autocomplete="nrc" autofocus>
                @error('nrc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" >{{ __('phone') }}</label>
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>
                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
                <a href="{{route('login')}}" style="color: blue;">Already Have an Account!!</a>
            </div>
        </form>
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12">
</div>
</div>
</div>
</div>
@endsection


