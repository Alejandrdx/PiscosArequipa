<?php

namespace Database\Seeders;

use App\Models\Detalle_Solicitud;
use Illuminate\Database\Seeder;

class DetalleSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle_Solicitud::factory(50)->create();
    }
}
