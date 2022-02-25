<?php

namespace Database\Seeders;

use App\Models\Filme;
use Illuminate\Database\Seeder;

class FilmeTableSeeder extends Seeder
{
    public function run()
    {
        Filme::factory()
            ->count(5)
            ->create();
    }
}
