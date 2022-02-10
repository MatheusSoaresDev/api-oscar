<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edicao;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EdicaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edicao::factory()
            ->count(50)
            ->create();
    }
}
