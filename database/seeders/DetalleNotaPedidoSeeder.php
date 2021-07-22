<?php

namespace Database\Seeders;

use App\Models\Detalle_NotaPedido;
use Illuminate\Database\Seeder;

class DetalleNotaPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle_NotaPedido::factory(50)->create();
    }
}
