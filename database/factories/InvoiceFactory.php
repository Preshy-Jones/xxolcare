<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'file_URL' => 'https://res.cloudinary.com/https-www-xxolcare-com/raw/upload/fl_attachment/v1640541408/snr1lpkzirutqlq8h1px.png',
            'created_at' => $this->faker->dateTimeBetween('-2 years', '+6 years'),
        ];
    }
}
