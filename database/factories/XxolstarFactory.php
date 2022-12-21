<?php

namespace Database\Factories;

use App\Models\Xxolstar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class XxolstarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Xxolstar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $locations = ['Victoria Island', 'Ikoyi', 'Lekki', 'Ajah', 'Ogudu', 'Ikeja GRA', 'Maryland', 'Opebi', 'Magodo', 'Yaba', 'Gbagada', 'Ogba', 'Oba Akran', 'Illupeju', 'Festac', 'Surulere', 'Ojodu', 'Oregun', 'Alausa'];
        $services = ['Standard Home cleaning', 'Care Givers', 'Normal/Swedish massage', 'Deep massage', 'Pre-natal massage', 'Trigger and Reflexology', 'Salon'];
        $randKeysServices = array_rand($services, 3);
        $randKeysLocation = array_rand($locations, 2);
        $randomServices = [$services[$randKeysServices[0]], $services[$randKeysServices[1]], $services[$randKeysServices[2]]];
        $randomLocations = [$locations[$randKeysLocation[0]], $locations[$randKeysLocation[1]]];
        return [
            'first_name' => $this->faker->firstName($gender = 'male' | 'female'),
            'last_name' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'state' => $this->faker->state(),
            'phone' => '2348188996821',
            'country' => $this->faker->country(),
            'location' => $randomLocations,
            'date_of_birth' => $this->faker->date('m/d/Y'),
            'biography' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'specialization' => $randomServices,
            'profile_photo' => $this->faker->imageUrl(640, 480, 'animals', true),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ];
    }
}
