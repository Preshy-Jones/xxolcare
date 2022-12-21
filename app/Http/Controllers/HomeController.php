<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = Auth::user()['name'];
        $email = Auth::user()['email'];
        return view('user_dashboard.home', ['name' => $name, 'email' => $email]);
    }

    public $servicesModelNameArray = [
        'Standard_home_cleaning', 'Care_givers', 'Spa', 'Salon', 'Deep_cleaning', 'Office_cleaning', 'Relocation',
    ];

    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Spa' => 'Spa',
        'Salon' => 'Salon',
        'Relocation' => 'Relocation',
        'Deep cleaning/Post construction cleaning' => 'Deep_cleaning',
        'Office cleaning' => 'Office_cleaning',

    ];

    public function bookings()
    {

//        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        $userId = Auth::id();
        $inProgressBookings = [];
        $completedBookings = [];

        for ($i = 0; $i < count($this->servicesModelNameArray); $i++) {

            $inProgressServiceBookings = User::find($userId)[$this->servicesModelNameArray[$i]]->where('progress', '!=', 'Departed');
            $completedServiceBookings = User::find($userId)[$this->servicesModelNameArray[$i]]->where('progress', '=', 'Departed');
            //echo ($serviceBookings);
            //echo gettype($bookings);
            $inProgressBookings = array_merge($inProgressBookings, json_decode($inProgressServiceBookings, true));
            $completedBookings = array_merge($completedBookings, json_decode($completedServiceBookings, true));
        }

        // return $inProgressBookings;
        // return $userId;
        // $bookings = XxolStar::find($userId)->Standard_home_cleaning;
        // return gettype(json_decode($bookings));
        // return $data;
        return view('user_dashboard.bookings', ['inProgressBookings' => $inProgressBookings, 'completedBookings' => $completedBookings, 'servicesModelNameArray' => $this->servicesModelNameArray, 'servicesKey' => $this->servicesKey]);
    }
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
        ]);
        try {

            $user = User::find($id);
            $user->email = $request->input('email');
            $user->name = $request->input('name');
            $user->save();
        } catch (\Exception$e) {
            echo $e->getMessage();
        }
        return redirect('/dashboard');
    }
}
