<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;

class FrontendController extends Controller
{
    public function index($value='')
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
    public function package($value='')
    {
        $packages = Package::all();
        return view('frontend.package',compact('packages'));
    }
    public function packagedetail($id)
    {
        $package=Package::find($id);
        return view('frontend.packagedetail',compact('package'));
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
