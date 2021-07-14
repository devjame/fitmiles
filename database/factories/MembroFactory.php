<?php

namespace Database\Factories;

use App\Models\Membro;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Membro::class;

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
            'data_de_nascimento' => $this->faker->date(),
            'user_id' => $this->faker->Number(1),
            'telemovel' => $this->faker->unique()->e164PhoneNumber(),
            'genero' => $this->faker->randomElement(['M', 'F']),
        ];
    }
}
