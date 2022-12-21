<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Identification;

class IdentificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identification::factory()
            ->count(150)->create();
    }
}
