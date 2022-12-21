<?php

namespace Database\Factories;

use App\Models\Finance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class FinanceFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Finance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = ['Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense'];
        $randTypes = array_rand($types, 5);
        $randomType = $types[$randTypes[2]];
        // dd(gettype($randomType));
        return [
            'contact' => $this->faker->name($gender = 'male' | 'female'),
            'title' => $this->faker->sentence(3),
            'amount' => ($this->faker->randomFloat(2)),
            'type' => $this->faker->randomElement(['Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense']),
            'summary' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTimeBetween('-2 years', '+6 years'),
            'assigned' => $this->faker->name($gender = 'male' | 'female'),
        ];
    }
}
