<?php

namespace Database\Factories;

use App\Models\Nota_Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class Nota_PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nota_Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fecha_Pedido' => $this->faker->dateTime,
            'Fecha_Entrega' => $this->faker->dateTime,
            'Fecha_Pago' => $this->faker->dateTime,
            'Descripcion' => $this->faker->text(600),
            'Id_Contacto' => $this->faker->numberBetween(1, 15),
            'Id_TipoReunion' => $this->faker->numberBetween(1, 3),
            'Id_Sede' => $this->faker->numberBetween(1, 2),
            'Id_Empleado' => $this->faker->numberBetween(1, 6),
        ];
    }
}
