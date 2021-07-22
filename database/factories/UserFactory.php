<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'login' => $this->faker->unique()->userName,
            'password' => Hash::make('12345'),
            'Nombres' => $this->faker->firstName,
            'Apellido_Paterno' => $this->faker->lastName,
            'Apellido_Materno' => $this->faker->lastName,
            'DNI' => $this->faker->unique()->randomNumber(8, true),
            'Direccion' => $this->faker->address,
            'Telefono' => $this->faker->unique()->phoneNumber,
            'Email' => $this->faker->unique()->email,
            'Id_Rol' => $this->faker->unique()->numberBetween(1, 6)
        ];

        //'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    }

}
