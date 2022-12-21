<?php

namespace App\Http\Controllers;

use App\Models\Xxolstar as XxolStar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

    public function login()
    {
        return view('xxolstars.auth.login');
    }
    public function register()
    {
        return view('xxolstars.auth.register');
    }
    public function save(Request $request)
    {
        return $request;
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:xxolstars',
            'password' => 'required|min:5|max:25',
            'address' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required',
            'specialization' => 'required',
        ]);
        //Insert data into database
        $xxolstar = new XxolStar;
        $xxolstar->first_name = $request->first_name;
        $xxolstar->last_name = $request->last_name;
        $xxolstar->address = $request->address;
        $xxolstar->phone = $request->phone;
        $xxolstar->state = $request->state;
        $xxolstar->country = $request->country;
        $xxolstar->date_of_birth = $request->date_of_birth;
        $xxolstar->specialization = $request->specialization;
        $xxolstar->email = $request->email;
        $xxolstar->password = Hash::make($request->password);
        $save = $xxolstar->save();

        if ($save) {
//            return back()->with('success', 'New User has been successfuly added to database');
            return redirect('/xxolstars/login')->with('success', 'You have successfully been registered, you can now login!');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    public function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:25',
        ]);

        $userInfo = XxolStar::where('email', '=', $request->email)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your email address');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/xxolstars');

            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('/xxolstars/login');
        }
    }

    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Normal/Swedish massage' => 'Spa',
        'Deep massage' => 'Spa',
        'Pre-natal massage' => 'Spa',
        'Trigger and Reflexology' => 'Spa',
        'Salon' => 'Salon',
    ];
    public function dashboard()
    {
//        $xxolstarData = XxolStar::where('id', '=', session('LoggedUser'))->first();
        $data = ['LoggedUserInfo' => XxolStar::where('id', '=', session('LoggedUser'))->first()];
        // return $xxolstarData;
        return view('xxolstars.profile', $data);
    }
    public function bookings()
    {

        // $user = User::find($user_id);
        // return view('dashboard')->with('posts', $user->posts);
        $data = ['LoggedUserInfo' => XxolStar::where('id', '=', session('LoggedUser'))->first()];
        $xxolstarId = $data['LoggedUserInfo']['id'];
        $inProgressBookings = [];
        $completedBookings = [];
        $specializations = $data['LoggedUserInfo']['specialization'];
        //dd(XxolStar::find($xxolstarId));
        for ($i = 0; $i < count($specializations); $i++) {
            //$serviceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]];
            if ($this->servicesKey[$specializations[$i]] === 'Spa') {
                $inProgressServiceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Accepted')->where('service', $specializations[$i]);
                $completedServiceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Done')->where('service', $specializations[$i]);
            } else {
                $inProgressServiceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Accepted');
                $completedServiceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Done');
            }

            //echo ($serviceBookings);
            //echo gettype($bookings);
            $inProgressBookings = array_merge($inProgressBookings, json_decode($inProgressServiceBookings, true));
            $completedBookings = array_merge($completedBookings, json_decode($completedServiceBookings, true));
        }

        // return $bookings;
        // return $xxolstarId;
        // $bookings = XxolStar::find($xxolstarId)->Standard_home_cleaning;
        // return gettype(json_decode($bookings));
        // return $data;
        return view('xxolstars.bookings', ['inProgressBookings' => $inProgressBookings, 'completedBookings' => $completedBookings, 'servicesKey' => $this->servicesKey]);
    }
    public function offers()
    {
        $data = ['LoggedUserInfo' => XxolStar::where('id', '=', session('LoggedUser'))->first()];
        $xxolstarId = $data['LoggedUserInfo']['id'];
        $bookings = [];
        $specializations = $data['LoggedUserInfo']['specialization'];
        for ($i = 0; $i < count($specializations); $i++) {
            if ($this->servicesKey[$specializations[$i]] === 'Spa') {
                $serviceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Pending')->where('service', $specializations[$i]);
            } else {
                $serviceBookings = XxolStar::find($xxolstarId)[$this->servicesKey[$specializations[$i]]]->where('status', 'Pending');
            }

            //echo ($serviceBookings);
            //echo gettype($bookings);
            $bookings = array_merge($bookings, json_decode($serviceBookings, true));
        }
        // return $data;
        return view('xxolstars.offers', ['bookings' => $bookings, 'specializations' => $specializations, 'servicesKey' => $this->servicesKey]);
    }
}
