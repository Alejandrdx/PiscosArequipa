<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolicitudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Solicitud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha_Solicitud' => $this->faker->dateTime,
            'Descripcion' => $this->faker->text(600),
            'Id_Empleado' => $this->faker->numberBetween(1, 6),
            'Id_Sede' => $this->faker->numberBetween(1, 2),
            'Id_Estado' => $this->faker->numberBetween(1, 7),
        ];
    }
}
