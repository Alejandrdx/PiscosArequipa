<?php

namespace Database\Seeders;

use App\Models\Sede;
use Illuminate\Database\Seeder;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sede::create([
            'Nombre' => 'Sede Central',
            'Descripcion' => 'Sede central de elaboracion de Piscos Arequipa',
            'Direccion' => 'Majes'
        ]);

        Sede::create([
            'Nombre' => 'Sede Arequipa',
            'Descripcion' => 'Sede Arequipa de venta de Piscos en la ciudad',
            'Direccion' => 'Cayma'
        ]);
    }
}
