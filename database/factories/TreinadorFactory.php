<?php

namespace Database\Factories;

use App\Models\Treinador;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreinadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Treinador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome_completo' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'NIF' => $this->faker->unique()->randomNumber(9, true),
            'endereco' => $this->faker->address(),
            'telemovel' => $this->faker->unique()->e164PhoneNumber(),
            'genero' => $this->faker->randomElement(['M', 'F', 'N']),
        ];
    }
}
