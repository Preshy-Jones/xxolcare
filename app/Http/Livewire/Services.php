<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Services extends Component
{
    public $service;
    public $pricingIds;
    public $dialect;
    public $address;
    public $serviceVisible = [
        "standard_home_cleaning" => 'hidden',
        "spa_service" => 'hidden',
        "salon_service" => 'hidden',
        "care_givers" => 'hidden',
        "office_cleaning" => 'hidden',
        "relocation_assistance" => 'hidden',
        "deep_cleaning" => 'hidden',
    ];
    public $bookingSummary = [
        "standard_home_cleaning" => [
            [
                'name' => "Frequency of service",
                'id' => 'st_frequency_sum',
            ],
            [
                'name' => "Number of bedrooms",
                'id' => 'st_bedroom_sum',
            ],
            [
                'name' => "Cleaning Materials",
                'id' => 'st_cleaning_materials_sum',
            ],
            [
                'name' => "Address",
                'id' => 'st_address_sum',
            ],
            [
                'name' => "Location",
                'id' => 'st_location_sum',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => 'st_bathroom_sum',
            ],
            [
                'name' => "Extra services",
                'id' => 'st_extra_services_sum',
            ],
        ],
        "care_givers" => [
            [
                'name' => "Service",
                'id' => 'cg_service_sum',
            ],
            [
                'name' => "Location",
                'id' => 'cg_location_sum',
            ],
            [
                'name' => "Address",
                'id' => 'cg_address_sum',
            ],
            [
                'name' => "Age",
                'id' => 'cg_age_sum',
            ],
            [
                'name' => "frequency",
                'id' => 'cg_frequency_sum',
            ],
            [
                'name' => "people",
                'id' => 'cg_people_sum',
            ],
            [
                'name' => "language",
                'id' => 'cg_language_sum',
            ],
            [
                'name' => "Local dialect",
                'id' => 'cg_dialect_sum',
            ],
        ],
        "spa_service" => [
            [
                'name' => "Service",
                'id' => 'spa_service_sum',
            ],
            [
                'name' => "Location",
                'id' => 'spa_location_sum',
            ],
            [
                'name' => "Address",
                'id' => 'spa_address_sum',
            ],
            [
                'name' => "Gender",
                'id' => 'spa_gender_sum',
            ],
            [
                'name' => "frequency",
                'id' => 'spa_frequency_sum',
            ],
        ],
        "salon_service" => [
            [
                'name' => "Service",
                'id' => 'sl_service_sum',
            ],
            [
                'name' => "Location",
                'id' => 'sl_location_sum',
            ],
            [
                'name' => "Address",
                'id' => 'sl_address_sum',
            ],
            [
                'name' => "Number of persons",
                'id' => 'sl_persons_sum',
            ],
        ],

        "office_cleaning" => [
            [
                'name' => "Location",
                'id' => 'off_location_sum',
            ],
            [
                'name' => "Address",
                'id' => 'off_address_sum',
            ],
            [
                'name' => "Number of floors",
                'id' => 'off_floors_sum',
            ],
            [
                'name' => "Number of rooms",
                'id' => 'off_rooms_sum',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => 'off_bathrooms_sum',
            ],
            [
                'name' => "frequency",
                'id' => 'off_frequency_sum',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'off_scheduled_visit_sum',
            ],
        ],
        "relocation_assistance" => [
            [
                'name' => "Location",
                'id' => 'rel_location_sum',
            ],
            [
                'name' => "Type of property",
                'id' => 'rel_property_sum',
            ],

            [
                'name' => "Number of rooms",
                'id' => 'rel_rooms_sum',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'rel_scheduled_visit_sum',
            ],
        ],
        "deep_cleaning" => [
            [
                'name'=>'Service',
                'id' => 'deep_service_sum'
            ],
            [
                'name' => "Location",
                'id' => 'deep_location_sum',
            ],
            [
                'name' => "Address",
                'id' => 'deep_address_sum',
            ],
            [
                'name' => "Number of floors",
                'id' => 'deep_floors_sum',
            ],
            [
                'name' => "Number of rooms",
                'id' => 'deep_rooms_sum',
            ],
            [
                'name' => "Number of bathrooms",
                'id' => 'deep_bathrooms_sum',
            ],
            [
                'name' => "Scheduled visit date",
                'id' => 'deep_scheduled_visit_sum',
            ],
        ],
    ];
    public function mount()
    {
        $this->serviceVisible[$this->service] = '';
    }
    public function render()
    {
        return view('livewire.services');
    }
}
