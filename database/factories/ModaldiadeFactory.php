<?php

namespace Database\Factories;

use App\Models\Modalidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class MembroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Modalidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement(['Ciclismo', 'Flexões', 'Abdominal', 'Sprint']),
            'descricao' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['ativo', 'inativo'])
        ];
    }
}
