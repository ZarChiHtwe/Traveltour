<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Car;
use App\Cartype;

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
        $cartypes = Cartype::all();
        return view('backend.cars.create',compact('cartypes'));
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

            'photo.*' => 'required|mimes:jpeg,bmp,png',
            'status'=> 'required|max:191',
            'cartype'=> 'required'


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
        $car = new Car;
        $car->carnumber = $request->carnumber;

        $car->photo = json_encode($data);
        $car->status = $request->status;
        $car->cartype_id = $request->cartype;
        $car->save();
        // $car = new Car;
        // $car->carnumber = $request->carnumber;
        // $car->photo = json_encode($data);
        // $car->status = $request->status;

        // File Upload  getClientOriginalName()

        // $imageName =time().'.'.$request->photo->extension();
        // $request->photo->move(public_path('images'),$imageName);
        // $filepath='images/'.$imageName;

        //Data insert

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
        $car = Car::find($id);
        return view('backend.cars.detail',compact('car'));
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
        $cartypes = Cartype::all();
        return view('backend.cars.edit',compact('car','cartypes'));
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

            'status'=> 'required|max:191',
            'cartype'=> 'required'
            
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
        $car =  Car::find($id);
        $car->carnumber = $request->carnumber;
        $car->photo =$data;
        $car->status = $request->status;
        $car->cartype_id= $request->cartype;

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
