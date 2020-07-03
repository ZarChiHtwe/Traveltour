
@extends('frontend.master')
@section('content')
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


