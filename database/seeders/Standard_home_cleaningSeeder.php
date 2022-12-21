<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standard_home_cleaning;

class Standard_home_cleaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Standard_home_cleaning::factory()
            ->count(100)->create();
    }
}
