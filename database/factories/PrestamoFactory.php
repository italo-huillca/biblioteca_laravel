<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Prestamo::class;

    public function definition()
    {
        return [
            'usuario_id' => Usuario::factory(),
            'libro_id' => Libro::factory(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_devolucion' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'devuelto']),
        ];
    }
}
