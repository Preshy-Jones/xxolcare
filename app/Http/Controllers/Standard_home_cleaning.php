<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Standard_home_cleaning extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function service(Request $request)
    {
        $this->validate($request, [
            'service' => 'required',
            'frequency' => 'required',
            'location' => 'required',
        ]);

        $userid = auth()->user()->id;
        $booking = new standard_home_cleaning;
        $booking->service = $request->input('service');
        $booking->frequency = $request->input('frequency');
        $booking->location = $request->input('location');
        $booking->state = $request->input('state');
        $booking->need_cleaning_materials = $request->input('need_cleaning_materials');
        $booking->number_of_rooms = $request->input('number_of_rooms');
        $booking->number_of_toilets = $request->input('number_of_toilets');
        $booking->userid = auth()->user()->id;
        $booking->special_instructions = $request->input('special_instructions');

        // return $booking;
        $booking->save();

        return view('booking.schedule')->with('booking', $booking);
    }
    public function schedule(Request $request, $id)
    {

        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
        ]);

        $userid = auth()->user()->id;

        try {
            $booking = standard_home_cleaning::find($id);
            $booking->date = $request->input('date');
            $booking->time = $request->input('time');
            $booking->save();
        } catch (\Exception$e) {
            // do task when error
            echo $e->getMessage(); // insert query
        }

        return view('booking.contactdetails')->with('booking', $booking);
    }
    public function contact(Request $request, $id)
    {
        // return 'hello';

        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',
        ]);
//        return $request->input('time');
        $userid = auth()->user()->id;

        // return 'hello';
        // return redirect('/schedule');

        try {
            $booking = standard_home_cleaning::find($id);
            $booking->phone = $request->input('phone');
            $booking->email = $request->input('email');
            $booking->save();
        } catch (\Exception$e) {
            // do task when error
            echo $e->getMessage(); // insert query
        }
        return view('booking.payment');
    }
}
