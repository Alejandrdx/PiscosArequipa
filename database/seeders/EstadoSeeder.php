<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'Nombre' => "En Espera",
            'Descripcion' => 'Solicitud en espera de ser revisada',
        ]);

        Estado::create([
            'Nombre' => "En Revision",
            'Descripcion' => 'Solcitud en revision, verificando disponibilidad en inventario',
        ]);

        Estado::create([
            'Nombre' => "Aceptacion",
            'Descripcion' => 'Solcitud aceptada, pendiente de envio',
        ]);

        Estado::create([
            'Nombre' => "Enviando",
            'Descripcion' => 'Enviando los piscos solicitados',
        ]);

        Estado::create([
            'Nombre' => "Enviado",
            'Descripcion' => 'Piscos recepcionados en sede',
        ]);

        Estado::create([
            'Nombre' => "Denegado",
            'Descripcion' => 'Solicitud denegada',
        ]);

        Estado::create([
            'Nombre' => "Cancelado",
            'Descripcion' => 'Solicitud cancelada',
        ]);
    }
}
