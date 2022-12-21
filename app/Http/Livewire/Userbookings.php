<?php

namespace App\Http\Livewire;

use App\Models\Xxolstar;
use Livewire\Component;

class Userbookings extends Component
{
    public $inProgressBookings;
    public $completedBookings;
    public $xxolstarName;
    public $xxolstarPhoto;
    public $booking;
    public $progressView;
    public $currentView;
    public $servicesKey;
    public $service;

    public $progressKey = [
        'Yet to move' => 1,
        'On the way' => 2,
        'Arrived' => 3,
        'Working' => 4,
        'Done' => 5,
        'Departed' => 6,
    ];

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
            // [
            //     'name' => "frequency",
            //     'id' => 'spa_frequency_sum',
            //     'column_name' => 'frequency',
            // ],
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
        "Office_cleaning" => [
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
        "Relocation" => [
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
        "Deep_cleaning" => [
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
    public $selectedBookingProgressValue;

    public function mount()
    {
        $this->currentView = 'bookings';
        $this->progressView = 'inProgress';

        // dd((explode('', $this->bookings)));
    }
    public function viewInProgress()
    {
        // return redirect('/xxolstars/bookings');
        $this->progressView = 'inProgress';

    }

    public function openBookingTrackingSection($booking)
    {
        // dd($booking);
        $this->booking = $booking;
        $this->service = $this->servicesKey[$booking['booking']['service_name']];
        // dd($this->bookingSummary[$this->service]);
        if ($booking['booking']['service_name'] === 'Salon' || $booking['booking']['service_name'] === 'Spa' || $booking['booking']['service_name'] === 'Standard Home cleaning' || $booking['booking']['service_name'] === 'Care Givers') {
            $xxolstar = Xxolstar::find($booking['booking']['xxolstar_id']);
            $this->xxolstarPhoto = $xxolstar['profile_photo'];
            $this->selectedBookingProgressValue = $this->progressKey[$this->booking['booking']['progress']];
            //dd($this->selectedBookingProgressValue);
        }
        $this->currentView = 'bookingTracker';

    }
    public function viewCompleted()
    {
        $this->progressView = 'completed';

    }
    public function render()
    {
        return view('livewire.userbookings');
    }
}
