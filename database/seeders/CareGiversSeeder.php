<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Care_givers;

class CareGiversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Care_givers::factory()
            ->count(150)->create();
    }
}
