<?php

namespace App\Http\Livewire;

use App\Models\Care_givers;
use App\Models\Deep_cleaning;
use App\Models\Office_cleaning;
use App\Models\Relocation;
use App\Models\Salon;
use App\Models\Spa;
use App\Models\Standard_home_cleaning;
use App\Models\Xxolstar;
use Livewire\Component;
use Zeevx\LaraTermii\LaraTermii;

class Selectxxol extends Component
{

    public $service;
    public $xxolstars;
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

    protected $listeners = ['closeModal' => 'saveXxolStar'];

    public function saveXxolStar($xxolstarId, $firstName, $lastName)
    {
        if ($xxolstarId != '' && $firstName != '' && $lastName != '') {
            $bookingId = session('booking')['id'];
            try {
                if ($this->service == 'standard_home_cleaning') {
                    $booking = Standard_home_cleaning::find($bookingId);
                } else if ($this->service == 'care_givers') {
                    $booking = Care_givers::find($bookingId);
                } else if ($this->service == 'deep_cleaning') {
                    $booking = Deep_cleaning::find($bookingId);
                } else if ($this->service == 'salon_service') {
                    $booking = Salon::find($bookingId);
                } else if ($this->service == 'spa_service') {
                    $booking = Spa::find($bookingId);
                } else if ($this->service == 'office_cleaning') {
                    $booking = Office_cleaning::find($bookingId);
                } else if ($this->service == 'relocation_assistance') {
                    $booking = Relocation::find($bookingId);
                }

                $booking->xxolstar_id = $xxolstarId;
                $booking->xxol_star_name = "$firstName $lastName";
                $booking->save();
                $username = auth()->user()->name;
                $service = $booking['service_name'];

                $TERMII_API_KEY = env('TERMII_API_KEY');
                $termii = new LaraTermii($TERMII_API_KEY);
                $phone = Xxolstar::find($xxolstarId)['phone'];
                $message = "Alert: You have received a new $service booking from $username";
                $sender = 'xxolcare';
                $status = $termii->sendMessage($phone, $sender, $message);
            } catch (\Exception$e) {
                dd($e->getMessage());
            }
            //        dd(json_decode($status, true));
            if (json_decode($status, true)["message"] === "Successfully Sent") {
                return redirect("/bookings/bookingdetails/$this->service");
            } else {
                $this->emit('openModal', 'profile-update-status-modal', ['error', json_decode($status, true)["message"]]);
            }
            //        dd($termii->sendMessage($phone, $sender, $message));

            // return view('booking.bookingdetails');
        }

    }

    public function render()
    {
        return view('livewire.selectxxol');
    }
}
