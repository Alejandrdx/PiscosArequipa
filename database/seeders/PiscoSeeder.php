<?php

namespace Database\Seeders;

use App\Models\Pisco;
use Illuminate\Database\Seeder;

class PiscoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pisco::create([
            "Nombre" => "Pisco Puro Quebranta",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 72,
            "Imagen" => "1.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Puro Uva Negra",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 70,
            "Imagen" => "2.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Puro Mollar",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 55,
            "Imagen" => "3.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Acholado",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 58,
            "Imagen" => "4.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Puro Torontel",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 65,
            "Imagen" => "5.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Puro Moscatel",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 66,
            "Imagen" => "6.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Puro Italia",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 68,
            "Imagen" => "7.jpg"
        ]);

        Pisco::create([
            "Nombre" => "Pisco Mosto Verte Italia",
            "Descripcion" => "Cosecha y selección manual en pequeñas cantidades entre 6am y 9am. Maceración por 48 horas y fermentación a 25°C en tanques de acero inoxidable de 8 a 15 días. Destilación en alambiques de cobre. Tiempo de maduración de 24 meses. Filtrado de cobre a -2°C",
            "Precio" => 75,
            "Imagen" => "8.jpg"
        ]);
    }
}
