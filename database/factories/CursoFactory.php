<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'nome'=> $this->faker->words(2,true),
          'requisito'=> $this->faker->sentence(1,10),
          'carga_horaria'=> $this->faker->numberBetween(20,120),
          'valor'=> $this->faker->randomFloat(2,10,100),
        ];
    }
}
