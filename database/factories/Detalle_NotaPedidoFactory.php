<?php

namespace Database\Factories;

use App\Models\Detalle_NotaPedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class Detalle_NotaPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detalle_NotaPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Cantidad' => $this->faker->numberBetween(1, 20),
            'Id_NotaPedido' => $this->faker->numberBetween(1, 20),
            'Id_Pisco' => $this->faker->numberBetween(1, 8),
        ];
    }
}
