<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use App\Models\Xxolstar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingsController extends Controller
{

    public $pricingIds = [
        "standard_home_cleaning" => [
            'sub_total' => 'st_sub_total',
            'tax_total' => 'st_tax_total',
            'order_total' => 'st_order_total',
            'gen_totals' => 'st_totals-value',
        ],
        "spa_service" => [
            'sub_total' => 'spa_sub_total',
            'tax_total' => 'spa_tax_total',
            'order_total' => 'spa_order_total',
            'gen_totals' => 'spa_totals-value',
        ],
        "salon_service" => [
            'sub_total' => 'sl_sub_total',
            'tax_total' => 'sl_tax_total',
            'order_total' => 'sl_order_total',
            'gen_totals' => 'sl_totals-value',
        ],
        "care_givers" => [
            'sub_total' => 'cg_sub_total',
            'tax_total' => 'cg_tax_total',
            'order_total' => 'cg_order_total',
            'gen_totals' => 'cg_totals-value',
        ],
        "office_cleaning" => [
            'sub_total' => '',
            'tax_total' => '',
            'order_total' => '',
            'gen_totals' => '',
        ],
        "relocation_assistance" => [
            'sub_total' => '',
            'tax_total' => '',
            'order_total' => '',
            'gen_totals' => '',
        ],
        "deep_cleaning" => [
            'sub_total' => '',
            'tax_total' => '',
            'order_total' => '',
            'gen_totals' => '',
        ],

    ];
    public $servicesKey = [
        'standard_home_cleaning' => 'Standard Home cleaning',
        'care_givers' => 'Care Givers',
        'spa_service' => 'Spa',
        'salon_service' => 'Salon',
    ];
    public $modelNamesKey = [
        'standard_home_cleaning' => 'Standard_home_cleaning',
        'care_givers' => 'Care_givers',
        'spa_service' => 'Spa',
        'salon_service' => 'Salon',
    ];

    public static function verifyTransaction($reference)
    {
        $url = "https://api.paystack.co/transaction/verify/$reference";
        // return $url;
        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->get($url)->json();
        // return $data;
        if ($data['status'] == true) {
            return $data;
        } else {
            return $data;
        }
    }
    public static function initializeCharge($amount, $email, $callback_url, $booking)
    {
        $url = "https://api.paystack.co/transaction/initialize";
        $fields = [
            "email" => "$email",
            "amount" => "$amount",
            "callback_url" => "$callback_url",
        ];

        $data = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_KEY'),
            'Content-Type' => 'application/json',
        ])->post($url, $fields)->json();
        // return $data;
        if ($data['status'] == true) {
            $booking->authorization_url = $data['data']['authorization_url'];
            $booking->access_code = $data['data']['access_code'];
            $booking->reference = $data['data']['reference'];
            $booking->save();
            return $data;
        } else {
            return $data;
        }
    }
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'services', 'service', 'schedules', 'schedule']]);
    }

    public function index()
    {
        // return view('booking.service', ['service' => 'standard_home_cleaning']);
        return view('booking.service', ['service' => 'standard_home_cleaning', 'pricingIds' => $this->pricingIds]);
    }

    public function services($id)
    {

        // if ($id == 'standard_home_cleaning' || $id == 'spa_service' || $id == 'salon_service') {
        //     return view('booking.service', ['service' => $id, 'pricingIds' => $pricingIds]);
        // }

        return view('booking.service', ['service' => $id, 'pricingIds' => $this->pricingIds]);
    }
    public function schedules(Request $request, $id)
    {
        // return $request->session()->get('booking');

        // return view('booking.contactdetails')->with('service', $service);
        // return $request->session()->get('booking');
        return view('booking.schedule', ['service' => $id]);
    }
    public function contacts(Request $request, $id)
    {
        return view('booking.contactdetails', ['service' => $id]);
    }
    public function payments(Request $request, $id)
    {
        $query = $request->query();
        return view('booking.payment', ['service' => $id, 'query' => $query]);

        $reference = $query['reference'];
        //return $reference;
        $data = self::verifyTransaction($reference);
        return $data;

    }

    public function selectxxol(Request $request, $id)
    {
        $location = $request->session()->get('booking')['location'];
        $service = $this->servicesKey[$id];
        // return $service;
        // return gettype($service);
        // $xxolstars = Xxolstar::whereJsonContains('location', $location);
        // return $xxolstars;
        // return $location;
        try {
            if ($service === 'Spa') {
                $xxolstars = Xxolstar::whereJsonContains('location', $location)->whereJsonContains('specialization', $request->session()->get('booking')['service'])->get();
            } else {
                $xxolstars = Xxolstar::whereJsonContains('location', $location)->whereJsonContains('specialization', $service)->get();
            }

            // dd($xxolstars);

        } catch (\Exception$e) {
            dd($e->getMessage());
        }
        // return $xxolstars;
        // dd($xxolstars);
        return view('booking.selectxxol', ['service' => $id, 'xxolstars' => $xxolstars]);
    }
    public function bookingdetails(Request $request, $id)
    {
        $serviceModelName = $this->modelNamesKey[$id];
        $bookingModel = "App\Models\\" . $serviceModelName;
        $booking = $bookingModel::find($request->session()->get('booking')['id']);
        $xxolstar = Xxolstar::find($booking['xxolstar_id']);
        // return $xxolstar;
        return view('booking.bookingdetails', ['service' => $id, 'booking' => $booking, 'xxolstar' => $xxolstar]);
    }

    public function service(Request $request, $service)
    {

        if ($service == 'standard_home_cleaning') {
            $this->validate($request, [
                'frequency' => 'required',
                'location' => 'required',
                'state' => 'required',
                'number_of_rooms' => 'required',
                'number_of_bathrooms' => 'required',
                'need_cleaning_materials' => 'required',
                'address' => 'required',
            ]);

            $booking = new Standard_home_cleaning;
            $booking->frequency = $request->input('frequency');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->state = $request->input('state');
            $booking->need_cleaning_materials = $request->input('need_cleaning_materials');
            $booking->number_of_rooms = $request->input('number_of_rooms');
            $booking->number_of_bathrooms = $request->input('number_of_bathrooms');
            $booking->extra_services = $request->input('extra_services');
            $booking->special_instructions = $request->input('special_instructions');
            $booking->total_price = $request->input('total_price');
            $booking->sub_total = $request->input('sub_total');
            $booking->estimated_tax = $request->input('estimated_tax');
            $booking->save();
            $bookingModel = 'App\Models\Standard_home_cleaning';
            $request->session()->put('bookingModel', $bookingModel);

            // return redirect('/bookings/schedule/{id}')

        } else if ($service == 'care_givers') {
            $this->validate($request, [
                'service' => 'required',
                'frequency' => 'required',
                'location' => 'required',
                'address' => 'required',
                'language' => 'required',
                'number_of_people' => 'required',
                'age' => 'required',
                'state' => 'required',

            ]);

            $booking = new Care_givers;
            $booking->service = $request->input('service');
            $booking->frequency = $request->input('frequency');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->language = $request->input('language');
            $booking->local_dialect = $request->input('local_dialect');
            $booking->number_of_people = $request->input('number_of_people');
            $booking->age = $request->input('age');
            $booking->if_local_dialect = $request->input('if_local_dialect');
            $booking->state = $request->input('state');
            $booking->special_instructions = $request->input('special_instructions');
            $booking->total_price = $request->input('total_price');
            $booking->sub_total = $request->input('sub_total');
            $booking->estimated_tax = $request->input('estimated_tax');

            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Care_givers';
            $request->session()->put('bookingModel', $bookingModel);

        } else if ($service == 'deep_cleaning') {
            $this->validate($request, [
                'service' => 'required',
                'address' => 'required',
                'location' => 'required',
                'scheduled_date_for_site_visit' => 'required',
                'number_of_rooms' => 'required',
                'number_of_floors' => 'required',
                'number_of_bathrooms' => 'required',
                'state' => 'required',
            ]);

            $booking = new Deep_cleaning;
            $booking->service = $request->input('service');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->scheduled_date_for_site_visit = $request->input('scheduled_date_for_site_visit');
            $booking->number_of_floors = $request->input('number_of_floors');
            $booking->number_of_rooms = $request->input('number_of_rooms');
            $booking->number_of_bathrooms = $request->input('number_of_bathrooms');
            $booking->state = $request->input('state');
            $booking->date = $request->input('date');
            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Deep_cleaning';
            $request->session()->put('bookingModel', $bookingModel);

        } else if ($service == 'salon_service') {
            $this->validate($request, [
                'service' => 'required',
                'state' => 'required',
                'location' => 'required',
                'address' => 'required',
                'number_of_persons' => 'required',

            ]);

            $booking = new Salon;
            $booking->service = $request->input('service');
            $booking->state = $request->input('state');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->number_of_persons = $request->input('number_of_persons');
            $booking->special_instructions = $request->input('special_instructions');
            $booking->total_price = $request->input('total_price');
            $booking->sub_total = $request->input('sub_total');
            $booking->estimated_tax = $request->input('estimated_tax');
            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Salon';
            $request->session()->put('bookingModel', $bookingModel);

        } else if ($service == 'spa_service') {
            $this->validate($request, [
                'service' => 'required',
                'state' => 'required',
                'location' => 'required',
                'address' => 'required',
                'gender' => 'required',

            ]);

            $booking = new Spa;
            $booking->service = $request->input('service');
            $booking->state = $request->input('state');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->gender = $request->input('gender');
            $booking->special_instructions = $request->input('special_instructions');
            $booking->total_price = $request->input('total_price');
            $booking->sub_total = $request->input('sub_total');
            $booking->estimated_tax = $request->input('estimated_tax');
            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Spa';
            $request->session()->put('bookingModel', $bookingModel);

        } else if ($service == 'office_cleaning') {
            $this->validate($request, [
                'address' => 'required',
                'frequency' => 'required',
                'location' => 'required',
                'scheduled_date_for_site_visit' => 'required',
                'number_of_rooms' => 'required',
                'number_of_floors' => 'required',
                'number_of_bathrooms' => 'required',
                'state' => 'required',
            ]);

            $booking = new Office_cleaning;
            $booking->frequency = $request->input('frequency');
            $booking->location = $request->input('location');
            $booking->address = $request->input('address');
            $booking->scheduled_date_for_site_visit = $request->input('scheduled_date_for_site_visit');
            $booking->number_of_floors = $request->input('number_of_floors');
            $booking->number_of_rooms = $request->input('number_of_rooms');
            $booking->number_of_bathrooms = $request->input('number_of_bathrooms');
            $booking->state = $request->input('state');
            $booking->date = $request->input('date');
            $booking->special_instructions = $request->input('special_instructions');
            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Office_cleaning';
            $request->session()->put('bookingModel', $bookingModel);

        } else if ($service == 'relocation_assistance') {
            $this->validate($request, [
                'type_of_property' => 'required',
                'number_of_rooms' => 'required',
                'address' => 'required',
                'from' => 'required',
                'to' => 'required',
                'scheduled_date_for_site_visit' => 'required',
                'interstate_intrastate' => 'required',
            ]);

            $booking = new Relocation;
            $booking->type_of_property = $request->input('type_of_property');
            $booking->number_of_rooms = $request->input('number_of_rooms');
            $booking->address = $request->input('address');
            $booking->from = $request->input('from');
            $booking->to = $request->input('to');
            $booking->scheduled_date_for_site_visit = $request->input('scheduled_date_for_site_visit');
            // $booking->userid = auth()->user()->id;
            $booking->save();
            $bookingModel = 'App\Models\Relocation';
            $request->session()->put('bookingModel', $bookingModel);

        }
        $request->session()->put('booking', $booking);
        return redirect("/bookings/schedule/$service");
        // return view('booking.schedule')->with('service', $service);

    }
    public function schedule(Request $request, $service, $id)
    {
        //return ['service' => $service, 'id' => $id];

        // if ($service != 'care_givers') {
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required',
        ]);
        // } else {
        //     $this->validate($request, [
        //         'time' => 'required',
        //     ]);
        // }

        try {
            if ($service == 'standard_home_cleaning') {
                $booking = Standard_home_cleaning::find($id);
            } else if ($service == 'care_givers') {
                $booking = Care_givers::find($id);
            } else if ($service == 'deep_cleaning') {
                $booking = Deep_cleaning::find($id);
            } else if ($service == 'salon_service') {
                $booking = Salon::find($id);
            } else if ($service == 'spa_service') {
                $booking = Spa::find($id);
            } else if ($service == 'office_cleaning') {
                $booking = Office_cleaning::find($id);
            } else if ($service == 'relocation_assistance') {
                $booking = Relocation::find($id);
            }
            // if ($service != 'care_givers') {
            $booking->date = $request->input('date');
//            }

            $booking->time = $request->input('time');
            $booking->save();

        } catch (\Exception$e) {
            echo $e->getMessage();
        }

        //return view('booking.contactdetails')->with('service', $service);
        return redirect("/bookings/contactdetails/$service");
    }
    public function contact(Request $request, $service, $id)
    {

        $this->validate($request, [
            'phone' => 'required',
            'email' => 'required',
        ]);

        // $userid = auth()->user()->id;

        try {
            if ($service == 'standard_home_cleaning') {
                $booking = Standard_home_cleaning::find($id);
            } else if ($service == 'care_givers') {
                $booking = Care_givers::find($id);
            } else if ($service == 'deep_cleaning') {
                $booking = Deep_cleaning::find($id);
            } else if ($service == 'salon_service') {
                $booking = Salon::find($id);
            } else if ($service == 'spa_service') {
                $booking = Spa::find($id);
            } else if ($service == 'office_cleaning') {
                $booking = Office_cleaning::find($id);
            } else if ($service == 'relocation_assistance') {
                $booking = Relocation::find($id);
            }

            $booking->phone = $request->input('phone');
            $booking->email = $request->input('email');
            $booking->save();
            $domain = $request->getSchemeAndHttpHost();
            // return $domain;
            $callback_url = "$domain/bookings/payment/$service";
            // return ($booking->total_price);
            $data = self::initializeCharge($booking->total_price * 100, $booking->email, $callback_url, $booking);
            //return ['data' => $data, 'booking' => $booking];
        } catch (\Exception$e) {
            // do task when error
            echo $e->getMessage(); // insert query
        }
        return redirect($data['data']['authorization_url']);
        // return view('booking.payment');
    }
    public function payment()
    {

    }
}
