<?php

namespace Database\Factories;

use App\Models\Filme;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmeFactory extends Factory
{
    protected $model = Filme::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'data_lancamento' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'distribuidora' => $this->faker->name,
        ];
    }
}
