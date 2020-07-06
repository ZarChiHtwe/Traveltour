<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Travelroute;
use App\Location;

class TravelrouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelroutes = Travelroute::all();
        return view('backend.travelroutes.index',compact('travelroutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('backend.travelroutes.create',compact('locations'));
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
            'placefrom' => 'required',
            'placeto' => 'required'
        ]);

        //Data insert
        $travelroute = new Travelroute;
        $travelroute->placefrom_id = $request->placefrom;
        $travelroute->placeto_id = $request->placeto;

        $travelroute->save();

        //return
        return redirect()->route('travelroutes.index');
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
        $travelroute = Travelroute::find($id);
        $locations = Location::all();
        return view('backend.travelroutes.edit',compact('travelroute','locations'));
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
            'placefrom' => 'required',
            'placeto' => 'required'
        ]);

        //Data insert
        $travelroute = Travelroute::find($id);
        $travelroute->placefrom_id = $request->placefrom;
        $travelroute->placeto_id = $request->placeto;

        $travelroute->save();

        //return
        return redirect()->route('travelroutes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $travelroute = Travelroute::find($id);
        $travelroute->delete();

        return redirect()->route('travelroutes.index');
    }
}
