<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Libro::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'editorial' => $this->faker->company,
            'anio' => $this->faker->year,
            'disponible' => $this->faker->boolean,
        ];
    }

}
