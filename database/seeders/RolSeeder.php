<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'Nombre' => 'Gerente',
            'Descripcion' => 'Gerente de la empresa'
        ]);

        Rol::create([
            'Nombre' => 'Administrador',
            'Descripcion' => 'Administrador de sede'
        ]);

        Rol::create([
            'Nombre' => 'Vendedor',
            'Descripcion' => 'Vendedor de piscos'
        ]);

        Rol::create([
            'Nombre' => 'Repartidor',
            'Descripcion' => 'Repartidor de piscos'
        ]);

        Rol::create([
            'Nombre' => 'Almacenero',
            'Descripcion' => 'Control de almacen en sede'
        ]);

        Rol::create([
            'Nombre' => 'Encargado Planta',
            'Descripcion' => 'Control de planta'
        ]);
    }
}
