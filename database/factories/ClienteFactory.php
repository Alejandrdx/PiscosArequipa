<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Comercial' => $this->faker->unique()->company,
            'Razon_Social' => $this->faker->unique()->company,
            'Direccion' => $this->faker->address,
            'Telefono' => $this->faker->phoneNumber,
            'Email' => $this->faker->unique()->companyEmail,
            'RUC' => $this->faker->unique()->randomNumber(9, true)
        ];
    }
}
