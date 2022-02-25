<?php

namespace Database\Seeders;

use App\Models\Filme;
use App\Models\Oscar;
use App\Models\Premio;
use App\Models\User;
use Illuminate\Database\Seeder;

class AllTableSeeder extends Seeder
{
    public function run()
    {
        $this->createUser();
        //$this->createPremioOscar();
        $this->createFilme();
    }

    private function createUser()
    {
        User::factory()
            ->count(1)
            ->create();
    }

    private function createPremioOscar()
    {
        Premio::factory()
            ->count(5)
            ->forOscar()
            ->create();
    }

    private function createFilme()
    {
        Premio::factory()
            ->forOscar()
            ->has(Filme::factory()->count(3))
            ->create();
    }
}
