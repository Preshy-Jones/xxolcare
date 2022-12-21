<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;

class Contacts extends Component
{
    public $service;
    public $phone;
    public $email;
    public $bookingSummary = [
        "standard_home_cleaning" => [
            [
                'name' => "Frequency of service",
                'id' => '',
                'column_name' => 'frequency',
            ],
            [
                'name' => "Number of bedrooms",
                'id' => '',
                'column_name' => 'number_of_rooms',
            ],
            [
                'name' => "Cleaning Materials",
                'id' => '',
                'column_name' => 'need_cleaning_materials',
            ],
            [
                'name' => "Address",
                'id' => '',
                'column_name' => 'address',
            ],
            [
                'name' => "Location",
                'id' => '',
                'column_name' => 'location',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => '',
                'column_name' => 'number_of_bathrooms',
            ],
            [
                'name' => "Extra services",
                'id' => '',
                'column_name' => 'extra_services',
            ],

        ],
        "care_givers" => [
            [
                'name' => "Service",
                'id' => 'cg_service_sum',
                'column_name' => 'service',
            ],
            [
                'name' => "Location",
                'id' => 'cg_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Address",
                'id' => 'cg_address_sum',
                'column_name' => 'address',
            ],
            [
                'name' => "Age",
                'id' => 'cg_age_sum',
                'column_name' => 'age',
            ],
            [
                'name' => "frequency",
                'id' => 'cg_frequency_sum',
                'column_name' => 'frequency',
            ],
            [
                'name' => "people",
                'id' => 'cg_people_sum',
                'column_name' => 'number_of_people',
            ],
            [
                'name' => "language",
                'id' => 'cg_language_sum',
                'column_name' => 'language',
            ],
            [
                'name' => "Local dialect",
                'id' => 'cg_dialect_sum',
                'column_name' => 'local_dialect',
            ],
        ],
        "spa_service" => [
            [
                'name' => "Service",
                'id' => 'spa_service_sum',
                'column_name' => 'service',
            ],
            [
                'name' => "Location",
                'id' => 'spa_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Address",
                'id' => 'spa_address_sum',
                'column_name' => 'address',
            ],
            [
                'name' => "Gender",
                'id' => 'spa_gender_sum',
                'column_name' => 'gender',
            ],
            [
                'name' => "frequency",
                'id' => 'spa_frequency_sum',
                'column_name' => 'frequency',
            ],
        ],
        "salon_service" => [
            [
                'name' => "Service",
                'id' => 'sl_service_sum',
                'column_name' => 'service',
            ],
            [
                'name' => "Location",
                'id' => 'sl_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Address",
                'id' => 'sl_address_sum',
                'column_name' => 'address',
            ],
            [
                'name' => "Number of persons",
                'id' => 'sl_persons_sum',
                'column_name' => 'number_of_persons',
            ],
        ],

        "office_cleaning" => [
            [
                'name' => "Location",
                'id' => 'off_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Address",
                'id' => 'off_address_sum',
                'column_name' => 'address',
            ],
            [
                'name' => "Number of floors",
                'id' => 'off_floors_sum',
                'column_name' => 'number_of_floors',
            ],
            [
                'name' => "Number of rooms",
                'id' => 'off_rooms_sum',
                'column_name' => 'number_of_rooms',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => 'off_bathrooms_sum',
                'column_name' => 'number_of_bathrooms',
            ],
            [
                'name' => "frequency",
                'id' => 'off_frequency_sum',
                'column_name' => 'frequency',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'off_scheduled_visit_sum',
                'column_name' => 'scheduled_date_for_site_visit',
            ],
        ],
        "relocation_assistance" => [
            [
                'name' => "Location",
                'id' => 'rel_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Type of property",
                'id' => 'rel_property_sum',
                'column_name' => 'type_of_property',
            ],

            [
                'name' => "Number of rooms",
                'id' => 'rel_rooms_sum',
                'column_name' => 'number_of_rooms',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'rel_scheduled_visit_sum',
                'column_name' => 'scheduled_date_for_site_visit',
            ],
        ],
        "deep_cleaning" => [
            [
                'name' => 'Service',
                'id' => 'deep_service_sum',
                'column_name' => 'service',
            ],
            [
                'name' => "Location",
                'id' => 'deep_location_sum',
                'column_name' => 'location',
            ],
            [
                'name' => "Address",
                'id' => 'deep_address_sum',
                'column_name' => 'address',
            ],
            [
                'name' => "Number of floors",
                'id' => 'deep_floors_sum',
                'column_name' => 'number_of_floors',
            ],
            [
                'name' => "Number of rooms",
                'id' => 'deep_rooms_sum',
                'column_name' => 'number_of_rooms',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => 'deep_bathrooms_sum',
                'column_name' => 'number_of_bathrooms',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'deep_scheduled_visit_sum',
                'column_name' => 'scheduled_date_for_site_visit',
            ],
        ],
    ];

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

    protected $listeners = ['closeModal' => 'redirectTodashboard'];

    public function redirectTodashboard()
    {
        return redirect('/dashboard');
    }

    public function contactSubmit(Request $request)
    {
        $this->validate([
            'phone' => 'required',
            'email' => 'required',
        ]);

        // $userid = auth()->user()->id;

        try {
            if ($this->service == 'standard_home_cleaning') {
                $booking = Standard_home_cleaning::find(session('booking')['id']);
            } else if ($this->service == 'care_givers') {
                $booking = Care_givers::find(session('booking')['id']);
            } else if ($this->service == 'deep_cleaning') {
                $booking = Deep_cleaning::find(session('booking')['id']);
            } else if ($this->service == 'salon_service') {
                $booking = Salon::find(session('booking')['id']);
            } else if ($this->service == 'spa_service') {
                $booking = Spa::find(session('booking')['id']);
            } else if ($this->service == 'office_cleaning') {
                $booking = Office_cleaning::find(session('booking')['id']);
            } else if ($this->service == 'relocation_assistance') {
                $booking = Relocation::find(session('booking')['id']);
            }
            // dd($booking);
            $booking->phone = $this->phone;
            $booking->email = $this->email;
            if ($this->service == 'deep_cleaning' || $this->service == 'office_cleaning' || $this->service == 'relocation_assistance') {
                $booking->user_id = auth()->user()->id;
                $booking->user_name = auth()->user()->name;
                $booking->save();
                $this->emit('openModal', 'booking-complete-modal', ["Congratulations!You’ve successfully completed your booking, we'll get back to you on your scheduled date. "]);
                $receiverEmailAddress = "adedibuprecious@gmail.com";

                Mail::send('emailtemplate', ['booking' => $booking, 'user' => auth()->user()], function ($m) {
                    $m->from('lordorionrules@gmail.com', 'XXOLCARE');

                    $m->to('adedibuprecious@gmail.com', 'XXOL CARE ADMIN')->subject('New Booking!');
                });

                // if (Mail::failures() != 0) {
                //     return "Email has been sent successfully.";
                // }
                // return "Oops! There was some error sending the email.";
            } else {
                $booking->save();
                $domain = $request->getSchemeAndHttpHost();
                // return $domain;
                $callback_url = "$domain/bookings/payment/$this->service";
                // return ($booking->total_price);

                $data = self::initializeCharge($booking->total_price * 100, $booking->email, $callback_url, $booking);
                //return ['data' => $data, 'booking' => $booking];
                return redirect($data['data']['authorization_url']);
            }

        } catch (\Exception$e) {
            // do task when error
            dd($e->getMessage()); // insert query
        }

        // return view('booking.payment');
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
