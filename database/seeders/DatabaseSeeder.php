<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'pisco',
            'rol',
            'estado',
            'users',
            'cliente',
            'tipo_reunion',
            'sede',
            'contacto',
            'solicitud',
            'nota_pedido',
            'factura',
            'detalle_factura',
            'detalle_notapedido',
            'detalle_solicitud',
            'detalle_inventario',
        ]);
        $this->call(PiscoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(TipoReunionSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(SolicitudSeeder::class);
        $this->call(NotaPedidoSeeder::class);
        $this->call(FacturaSeeder::class);
        $this->call(DetalleFacturaSeeder::class);
        $this->call(DetalleNotaPedidoSeeder::class);
        $this->call(DetalleSolicitudSeeder::class);
        $this->call(DetalleInventarioSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach($tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
