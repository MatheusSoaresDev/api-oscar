<?php

namespace Database\Seeders;

use App\Models\Oscar;
use App\Models\Premio;
use Illuminate\Database\Seeder;

class PremioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Premio::factory()
            ->count(5)
            ->forOscar()
            ->create();
    }
}
