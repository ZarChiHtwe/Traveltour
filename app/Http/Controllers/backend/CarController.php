<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cars = Car::all();
        return view('backend.cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cars.create');
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
            'carnumber' => 'required|max:191',
            'photo' => 'required',
            'status'=> 'required|max:191'

        ]);

        //Data insert
        $car = new Car;
        $car->carnumber = $request->carnumber;
        $car->photo = $request->photo;
        $car->status = $request->status;

        $car->save();

        //return
        return redirect()->route('cars.index');
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
        $car = Car::find($id);
       return view('backend.cars.edit',compact('car'));
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
            'carnumber' => 'required|max:191',
            'name' => 'required|min:5|max:191',
            'status'=> 'required|max:191'
            

        ]);

        //Data insert
        $car =  Car::find($id);
        $car->carnumber = $request->carnumber;
        $car->name = $request->name;
        $car->status = $request->status;

        $car->save();

        //return
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $car = Car::find($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
