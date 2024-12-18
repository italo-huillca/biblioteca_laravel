<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'dni' => $this->faker->randomNumber(8, true), 
            'direccion' => $this->faker->address,
        ];
    }
}
