<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Package;
use App\Location;
use App\Cartype;
use App\Travelroute;

class FrontendController extends Controller
{
    public function index($value='')
    {
        $locations = Location::all();
        $cartypes = Cartype::all();
        return view('frontend.index',compact('locations','cartypes'));
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
        $popular = Package::all()
                        ->take(4);
        return view('frontend.package',compact('packages','popular'));
    }
    public function custompackage(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);


        $popular = Package::all()
                        ->take(4);

        // dd($request);
        $route = Travelroute::select('id')
                ->where('placefrom_id','=',$request->from)
                ->where('placeto_id','=',$request->to)
                ->get();

                // dd($route);x

                foreach ($route as $route_id) {
                    $custompackage = Package::where('route_id',$route_id->id)->get();
                }
        

        return view('frontend.custompackage',compact('custompackage','popular'));
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