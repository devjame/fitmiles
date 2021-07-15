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
    protected $model = Mensalidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'duracao' => $this->faker->randomElement(['30 dias', '90 dias', '180 dias', '360 dias']),
            'descricao' => $this->faker->sentence(),
            'montante' => $this->faker->randomFloat(2, 20, 100),
            'user_id' => 1,
        ];
    }
}
