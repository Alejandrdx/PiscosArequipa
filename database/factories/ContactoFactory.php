<?php

namespace Database\Factories;

use App\Models\Contacto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contacto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombres' => $this->faker->firstName,
            'Apellido_Paterno' => $this->faker->lastName,
            'Apellido_Materno' => $this->faker->lastName,
            'DNI' => $this->faker->unique()->randomNumber(8, true),
            'Telefono' => $this->faker->unique()->phoneNumber,
            "Email" => $this->faker->unique()->email,
            "Id_Cliente" => $this->faker->numberBetween(1, 7)
        ];
    }
}
