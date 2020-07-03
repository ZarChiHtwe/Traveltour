<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
       
        return view('frontend.index');
    }

     public function about()
    {
       
        return view('frontend.about');
    }
     public function contact()
    {
       
        return view('frontend.contact');
    }
    public function package()
    {
       
        return view('frontend.package');
    }
    public function packagedetail()
    {
       
        return view('frontend.packagedetail');
    }
    public function login()
    {
       
        return view('frontend.login');
    }
    public function register()
    {
       
        return view('frontend.register');
    }
}
