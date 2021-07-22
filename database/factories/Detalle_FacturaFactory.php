<?php

namespace Database\Factories;

use App\Models\Detalle_Factura;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Cantidad' => $this->faker->numberBetween(1, 20),
            'Id_Factura' => $this->faker->numberBetween(1,25),
            'Id_Pisco' => $this->faker->numberBetween(1, 8),
        ];
    }
}
