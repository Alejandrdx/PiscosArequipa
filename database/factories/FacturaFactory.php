<?php

namespace Database\Factories;

use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Factura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha' => $this->faker->dateTime,
            'N_GuiaRemision' => $this->faker->randomNumber(8, true),
            'Total' => $this->faker->randomFloat(2, 0, 500),
            'Id_Cliente' => $this->faker->numberBetween(1, 7),
            'Id_Empleado' => $this->faker->numberBetween(1, 6),
            'Id_NotaPedido' => $this->faker->numberBetween(1, 20),
        ];
    }
}
