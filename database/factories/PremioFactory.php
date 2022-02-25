<?php

namespace Database\Factories;

use App\Models\Oscar;
use App\Models\Premio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PremioFactory extends Factory
{
    protected $model = Premio::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'oscar_id' => Oscar::factory()
        ];
    }
}
