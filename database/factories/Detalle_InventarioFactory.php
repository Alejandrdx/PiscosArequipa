<?php

namespace Database\Factories;

use App\Models\Detalle_Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_InventarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_Inventario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Cantidad' => $this->faker->numberBetween(1, 200),
            'Id_Sede' => $this->faker->numberBetween(1, 2),
            'Id_Pisco' => $this->faker->numberBetween(1, 8),
        ];
    }
}
