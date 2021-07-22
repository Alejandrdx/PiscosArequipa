<?php

namespace Database\Seeders;

use App\Models\Nota_Pedido;
use Illuminate\Database\Seeder;

class NotaPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nota_Pedido::factory(20)->create();
    }
}
