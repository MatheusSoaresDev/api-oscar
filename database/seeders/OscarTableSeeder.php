<?php

namespace Database\Seeders;

use App\Models\Oscar;
use Illuminate\Database\Seeder;

class OscarTableSeeder extends Seeder
{
    public function run()
    {
        Oscar::factory()
            ->count(1)
            ->create();
    }
}
