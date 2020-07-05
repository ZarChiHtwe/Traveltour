<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $locations = Location::all();
        return view('backend.locations.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.locations.create');
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
            'name' => 'required|min:5|max:191',
            'photo.*' => 'required|mimes:jpeg,bmp,png',
            'description' => 'required'
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


        //Data insert
        $location = new Location;
        $location->name = $request->name;
        $location->photo = json_encode($data);
        $location->description = $request->description;

        $location->save();

        //return
        return redirect()->route('locations.index');
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
        $location = Location::find($id);
       return view('backend.locations.edit',compact('location'));
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
         //validation
        $request->validate([
            'name' => 'required|min:5|max:191',
            'description' => 'required'
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

        //Data insert
        $location = Location::find($id);
        $location->name = $request->name;
        $location->photo = $data;
        $location->description = $request->description;

        $location->save();

        //return
        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $location = Location::find($id);
        $location->delete();

        return redirect()->route('locations.index');
    }
}
