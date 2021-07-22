<?php

namespace Database\Factories;

use App\Models\Detalle_Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_SolicitudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_Solicitud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Cantidad' => $this->faker->numberBetween(1, 100),
            'Id_Solicitud' => $this->faker->numberBetween(1, 10),
            'Id_Pisco' => $this->faker->numberBetween(1, 8),
        ];
    }
}
