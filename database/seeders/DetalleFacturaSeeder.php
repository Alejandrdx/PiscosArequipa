<?php

namespace Database\Seeders;

use App\Models\Detalle_Factura;
use Illuminate\Database\Seeder;

class DetalleFacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle_Factura::factory(50)->create();
    }
}
