<?php

namespace Database\Factories;

use App\Models\Premio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PremioFactory extends Factory
{
    protected $model = Premio::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'nome' => $this->faker->state,
        ];
    }
}
