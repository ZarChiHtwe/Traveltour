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
        $popular = Package::all()
                    ->take(4);
        return view('frontend.index',compact('locations','popular'));
    }

    public function search_route(Request $request)
    {
        $id=$request->id;
        $route =Route::where('id','!=',$id)->get();
        return $route;
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
    public function custompackage(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);

        // dd($request);
        $route = Travelroute::select('id')
                ->where('placefrom_id','=',$request->from)
                ->where('placeto_id','=',$request->to)
                ->get();

                // dd($route);x

                foreach ($route as $route_id) {
                    $custompackage = Package::where('route_id',$route_id->id)->get();
                }
        

        return view('frontend.custompackage',compact('custompackage'));
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
