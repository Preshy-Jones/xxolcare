<?php

namespace Database\Factories;

use App\Models\Care_givers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Care_giversFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Care_givers::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $locations = ['Victoria Island', 'Ikoyi', 'Lekki', 'Ajah', 'Ogudu', 'Ikeja GRA', 'Maryland', 'Opebi', 'Magodo', 'Yaba', 'Gbagada', 'Ogba', 'Oba Akran', 'Illupeju', 'Festac', 'Surulere', 'Ojodu', 'Oregun', 'Alausa'];
        $services = ['Home nanny/Baby sitter', 'Care for the aged.', 'Care for people with special needs.'];
        $randKeysService = array_rand($services, 1);
        $randKeysLocation = array_rand($locations, 1);
        $randomService = $services[$randKeysService];
        $randomLocation = $locations[$randKeysLocation];
        return [
            'time' => $this->faker->time(),
            'xxol_star_name' => $this->faker->name($gender = 'male' | 'female'),
            'xxolstar_id' => 75,
            'user_id' => 1,
            'user_name' => $this->faker->name($gender = 'male' | 'female'),
            'status' => 'Done',
            'progress' => 'Departed',
            'sub_total' => $this->faker->randomNumber(6, true),
            'estimated_tax' => $this->faker->randomNumber(6, true),
            'total_price' => $this->faker->randomNumber(6, true),
            'authorization_url' => 'www.facebook.com',
            'access_code' => $this->faker->word(),
            'reference' => $this->faker->word(),
            'address' => $this->faker->address(),
            'date' => $this->faker->dateTimeBetween('-2 years', '+6 years'),
            'frequency' => 'Live in',
            'language' => 'French',
            'phone' => $this->faker->phoneNumber(),
            'number_of_people' => $this->faker->randomDigit(),
            'location' => $randomLocation,
            'age' => $this->faker->randomNumber(2, true),
            'state' => 'Lagos',
            'service' => $randomService,
            'service_name' => 'Care Givers',
            'email' => $this->faker->email(),
        ];

    }
}
