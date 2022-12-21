<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExpenseFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

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
            'description' => $this->faker->sentence(3),
            'amount' => $this->faker->randomFloat(1, 1, 38),
            'type' => $this->faker->randomElement(['Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense', 'Income', 'Expense']),
        ];
    }
}
