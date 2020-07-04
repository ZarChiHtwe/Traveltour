<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;
use App\Location;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('backend.hotels.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('backend.hotels.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'name' => 'required|max:191',
            'photo.*' => 'required|mimes:jpeg,bmp,png',
            'price'  => 'required',
            'address'=> 'required|max:191',
            'location'=> 'required'


        ]);
        if ($files=$request->file('photo')) {
            $destinationPath=public_path('images');
            foreach($files as $img)
            {
                $Image=$img->getClientOriginalName().'.'.$img->extension();
                $img->move($destinationPath, $Image);
                $data[]='images/'.$Image;
            }
        }
        $hotel = new Hotel;
        $hotel->name = $request->name;
        $hotel->photo = json_encode($data);
        $hotel->price = $request->price;
        $hotel->address = $request->address;
        $hotel->location_id = $request->location;
        $hotel->save();
        return redirect()->route('hotels.index');
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
       $hotel = Hotel::find($id);
        $locations = Location::all();
        return view('backend.hotels.edit',compact('hotel','locations'));
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
            'name' => 'required|max:191',
            'price'  => 'required',
            'address'=> 'required|max:191',
            'location'=> 'required'


        ]);
        $old=$request->oldphoto;

        if ($request->hasFile('photo')) {
           $files=$request->file('photo');
                $destinationPath=public_path('images');
                foreach($files as $img)
                {
                    $Image=$img->getClientOriginalName().'.'.$img->extension();
                    $img->move($destinationPath, $Image);
                    $photo[]='images/'.$Image;
                }

            $data=json_encode($photo);
            // unlink($old);
            $decold=json_decode($old);
            foreach($decold as $dc)
            {
                unlink($dc);
            }
        }
        else
        {
            $data=$request->oldphoto;
        }

        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->photo = $data;
        $hotel->price = $request->price;
        $hotel->address = $request->address;
        $hotel->location_id = $request->location;
        $hotel->save();
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();

        return redirect()->route('hotels.index');
    }
}
