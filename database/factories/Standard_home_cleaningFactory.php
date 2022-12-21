<?php

namespace Database\Factories;

use App\Models\Standard_home_cleaning;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Standard_home_cleaningFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Standard_home_cleaning::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $locations = ['Victoria Island', 'Ikoyi', 'Lekki', 'Ajah', 'Ogudu', 'Ikeja GRA', 'Maryland', 'Opebi', 'Magodo', 'Yaba', 'Gbagada', 'Ogba', 'Oba Akran', 'Illupeju', 'Festac', 'Surulere', 'Ojodu', 'Oregun', 'Alausa'];
        $randKeysLocation = array_rand($locations, 1);
        $randomLocation = $locations[$randKeysLocation];
        return [
            'time' => $this->faker->time(),
            'xxol_star_name' => 'Precious Adedibu',
            'xxolstar_id' => 2,
            'user_id' => 1,
            'user_name' => $this->faker->name($gender = 'male' | 'female'),
            'status' => 'Pending',
            'progress' => 'Arrived',
            'sub_total' => $this->faker->randomNumber(6, true),
            'estimated_tax' => $this->faker->randomNumber(6, true),
            'total_price' => $this->faker->randomNumber(6, true),
            'authorization_url' => 'www.facebook.com',
            'access_code' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'address' => $this->faker->address(),
            'date' => $this->faker->dateTimeBetween('-2 years', '+6 years'),
            'frequency' => 'One-time Service',
            'number_of_rooms' => 'French',
            'phone' => $this->faker->phoneNumber(),
            'need_cleaning_materials' => 'Yes',
            'location' => $randomLocation,
            'number_of_rooms' => $this->faker->randomDigit(),
            'number_of_bathrooms' => $this->faker->randomDigit(),
            'extra_services' => 'Car wash',
            'state' => 'Lagos',
            'service_name' => 'Standard Home cleaning',
            'email' => $this->faker->email(),
        ];

    }
}
