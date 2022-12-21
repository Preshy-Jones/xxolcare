<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Term_Condition;

class Term_ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term_Condition::factory()
            ->count(150)->create();
    }
}
