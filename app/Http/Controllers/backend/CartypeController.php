<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cartype;
class CartypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartypes = Cartype::all();
        return view('backend.cartypes.index',compact('cartypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cartypes.create');
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
            'price' => 'required'
        ]);

        //Data insert
        $cartype = new Cartype;
        $cartype->name = $request->name;
        $cartype->price = $request->price;

        $cartype->save();

        //return
        return redirect()->route('cartypes.index');
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
        $cartype = Cartype::find($id);
       return view('backend.cartypes.edit',compact('cartype'));
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
            'price' => 'required'
        ]);

        //Data insert
        $cartype =  Cartype::find($id);
        $cartype->name = $request->name;
        $cartype->price = $request->price;

        $cartype->save();

        //return
        return redirect()->route('cartypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cartype = Cartype::find($id);
        $cartype->delete();

        return redirect()->route('cars.index');
    }
}
