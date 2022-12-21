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

class Offers extends Component
{
    public $specializations;
    public $bookings;
    public $bookingId;
    public $service;
    public $booking;
    public $currentView;
    public $servicesKey = [
        'Standard Home cleaning' => 'Standard_home_cleaning',
        'Care Givers' => 'Care_givers',
        'Spa' => 'Spa',
        'Salon' => 'Salon',
    ];

    // = [
    //     'Standard Home cleaning' => 'standard_home_cleaning',
    //     'Care Givers' => 'care_givers',
    //     'Spa' => 'spa',
    //     'Salon' => 'salon',
    // ];

    public $bookingSummary = [
        "Standard_home_cleaning" => [
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
        "Care_givers" => [
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
        "Spa" => [
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
        "Salon" => [
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
    ];
    protected $listeners = ['closeModal' => 'updateBookingStatus'];
    public function mount()
    {
        $this->currentView = 'offers';
        // dd((explode('', $this->bookings)));
    }
    public function openSummary($bookingId, $service_name)
    {
        $this->bookingId = $bookingId;
        $this->service = $this->servicesKey[$service_name];
        $bookingModelName = $this->service;
        $bookingModel = "App\Models\\" . $bookingModelName;
        $this->booking = $bookingModel::find($bookingId);
        // dd()
//        dd($booking);
        // dd([$bookingId, $service]);
        $this->currentView = 'summary';
    }
    public function updateBookingStatus($bookingStatus)
    {
        // dd($bookingStatus);
        if ($bookingStatus != 'cancel') {
            // $this->bookingId = $bookingId;
            // $this->service = $this->servicesKey[$this->service_name];
            $bookingModelName = $this->service;
            $bookingModel = "App\Models\\" . $bookingModelName;
            try {
                $booking = $bookingModel::find($this->bookingId);
                $booking->status = $bookingStatus;
                $booking->save();
            } catch (\Exception$e) {
                dd($e->getMessage());
            }
        }

        return redirect('/xxolstars/bookings');

    }
    public function viewOffers()
    {
        $this->currentView = 'offers';
    }

    public function render()
    {
        return view('livewire.offers');
    }
}
