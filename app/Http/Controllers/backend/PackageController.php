<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cartype;
use App\Car;
use App\Hotel;
use App\Travelroute;
use App\Package;
use App\Booking;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $packages = Package::all();
        return view('backend.packages.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $hotels = Hotel::all();
        $travelroutes = Travelroute::all();
        return view('backend.packages.create',compact('cars','hotels','travelroutes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name'=>'required|min:5|max:191',
            'photo'=>'required|mimes:jpeg,bmp,png',
            'duration'=>'required',
            'depaturedate'=>'required',
            'depaturetime'=>'required',
            'packageprice'=>'required',
            'car'=>'required',
            'hotel'=>'required',
            'route'=>'required',
            'description'=>'required|min:5'
        ]);

        // File Upload
        $imageName =time().'.'.$request->photo->extension();
        $request->photo->move(public_path('images'),$imageName);
        $filepath='images/'.$imageName; 

        $carprice = Cartype::where('id',$request->car)
                        ->value('price');

        $hotelprice = Hotel::where('id',$request->hotel)
                        ->value('price');

        $totalprice = ($request->duration*$hotelprice)+$carprice+$request->packageprice;

        // dd($totalprice);

        // Data Insert
        $package=new Package;
        $package->name=$request->name;
        $package->photo=$filepath;
        $package->duration=$request->duration;
        $package->depaturedate=$request->depaturedate;
        $package->depaturetime=$request->depaturetime;
        $package->packageprice=$request->packageprice;
        $package->description=$request->description;
        $package->totalprice=$totalprice;
        $package->car_id=$request->car;
        $package->hotel_id=$request->hotel;
        $package->route_id=$request->route;

        $package->save();

        // Return 
        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        $cars = Car::all();
        $hotels = Hotel::all();
        $travelroutes = Travelroute::all();
        return view('backend.packages.edit',compact('package','cars','hotels','travelroutes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:5|max:191',
            'photo'=>'sometimes|mimes:jpeg,bmp,png',
            'duration'=>'required',
            'depaturedate'=>'required',
            'depaturetime'=>'required',
            'packageprice'=>'required',
            'car'=>'required',
            'hotel'=>'required',
            'route'=>'required',
            'description'=>'required|min:5'
        ]);
        $old=$request->oldphoto;

        // File Upload
        if ($request->hasFile('photo')) {
            $imageName =time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'),$imageName);
            $filepath='images/'.$imageName;

            unlink($old);
            // File::delete(asset($oldfilepath));
        }
        else
        {
            $filepath=$request->oldphoto;
        }

        $carprice = Cartype::where('id',$request->car)
                        ->value('price');

        $hotelprice = Hotel::where('id',$request->hotel)
                        ->value('price');

        $totalprice = ($request->duration*$hotelprice)+$carprice+$request->packageprice;

        // Data Insert
        $package =  Package::find($id);
        $package->name=$request->name;
        $package->photo=$filepath;
        $package->duration=$request->duration;
        $package->depaturedate=$request->depaturedate;
        $package->depaturetime=$request->depaturetime;
        $package->packageprice=$request->packageprice;
        $package->description=$request->description;
        $package->totalprice=$totalprice;
        $package->car_id=$request->car;
        $package->hotel_id=$request->hotel;
        $package->route_id=$request->route;

        $package->save();

        // Return 
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();

        return redirect()->route('packages.index');
    }
}
