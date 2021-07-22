<?php

namespace Database\Seeders;

use App\Models\cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cliente::factory(7)->create();
    }
}
