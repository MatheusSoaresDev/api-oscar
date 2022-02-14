<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Keygen\Keygen;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'key' => Keygen::alphanum(25)->generate(),
            'secret_key' => Keygen::alphanum(60)->generate(),
            'nome' => $this->faker->name,
            'email' => $this->faker->email,
            'status' => 1,
        ];
    }
}
