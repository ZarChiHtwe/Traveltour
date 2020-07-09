<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Booking;
use App\User;
use App\Package;
use Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all()
                    ->where('status','Pending');
        $conbookings = Booking::all()
                    ->where('status','Confirm');
        return view('backend.bookings.index',compact('bookings','conbookings'));
    }

    public function confirmlist()
    {
        $bookings = Booking::all()
                    ->where('status','Confirm');
        return view('backend.bookings.confirmlist',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'people' => 'required',
        ]);

        $grandtotal=$request->people*$request->totalprice;

        $userid=Auth::id();

        // dd($grandtotal);

        $booking =new Booking;
        $booking->bookingdate = date('Y-m-d');
        $booking->voucherno=uniqid();
        $booking->grandtotal=$grandtotal;
        $booking->numberofpeople=$request->people;
        $booking->status='Pending';
        $booking->package_id=$request->package;
        $booking->user_id=$userid;
        $booking->save();

        return redirect()->route('package')->with('reply','Your Booking is successful. Wait for our reply.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('backend.bookings.detail',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $date=date('Y-m-d');

        $data=array(
            'name'=>$request->name,
            'voucherno'=>$request->voucherno,
            'grandtotal'=>$request->grandtotal,
            'numberofpeople'=>$request->numpeople,
            'car'=>$request->car,
            'cartype'=>$request->cartype,
            'hotel'=>$request->hotel,
            'package'=>$request->package,
            'depaturedate'=>$request->depaturedate,
            'depaturetime'=>$request->depaturetime,
            'duration'=>$request->duration,
            'date'=> $date,
        );
        Mail::to('kobunny123@gmail.com')->send(new SendMail($data));
        
        //Data insert
        $booking = Booking::find($id);
        $booking->status = 'Confirm';
        $booking->save();

        //return
        return redirect()->route('bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
