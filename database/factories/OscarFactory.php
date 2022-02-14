<?php

namespace Database\Factories;

use App\Models\Oscar;
use Illuminate\Database\Eloquent\Factories\Factory;

class OscarFactory extends Factory
{
    protected $model = Oscar::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'local' => $this->faker->state,
            'data' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cidade' => $this->faker->city.', '.$this->faker->countryCode,
            'apresentador' => $this->faker->name,
        ];
    }
}
