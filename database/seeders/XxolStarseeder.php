<?php

namespace Database\Seeders;

use App\Models\Xxolstar;
use Illuminate\Database\Seeder;

class XxolStarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Xxolstar::factory()
            ->count(150)->create();

    }
}
