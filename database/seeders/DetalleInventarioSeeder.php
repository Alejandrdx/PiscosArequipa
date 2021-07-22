<?php

namespace Database\Seeders;

use App\Models\Detalle_Inventario;
use Illuminate\Database\Seeder;

class DetalleInventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle_Inventario::factory(50)->create();
    }
}
