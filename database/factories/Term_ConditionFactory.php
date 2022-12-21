<?php

namespace Database\Factories;

use App\Models\Term_Condition;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Term_ConditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Term_Condition::class;
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
