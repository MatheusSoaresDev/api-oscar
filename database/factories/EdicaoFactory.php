<?php

namespace Database\Factories;

use App\Models\Edicao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Nonstandard\Uuid;

class EdicaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Edicao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'ano' => $this->faker->unique()->year,
            'local' => $this->faker->state,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cidade' => $this->faker->city.', '.$this->faker->countryCode,
        ];
    }
}
