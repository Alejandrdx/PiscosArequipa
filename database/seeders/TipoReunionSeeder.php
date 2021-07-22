<?php

namespace Database\Seeders;

use App\Models\Tipo_Reunion;
use Illuminate\Database\Seeder;

class TipoReunionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Reunion::create([
            'Nombre' => 'Presencial',
            'Descripcion' => 'Reunion presencial entre el venedeor y contacto'
        ]);

        Tipo_Reunion::create([
            'Nombre' => 'Llamada Telefonica',
            'Descripcion' => 'Reunion relizada mediante una llmada al vendedor'
        ]);

        Tipo_Reunion::create([
            'Nombre' => 'Reunion Virtual',
            'Descripcion' => 'Reunion realizada de manera virtual con el contacto'
        ]);
    }
}
