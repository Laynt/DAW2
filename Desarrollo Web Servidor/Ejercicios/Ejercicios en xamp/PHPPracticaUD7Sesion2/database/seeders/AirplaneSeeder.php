<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Airplane;

class AirplaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncamos la tabla para comenzar con una vacía.
        Airplane::truncate();
        // No hacemos nada más ya que se crearán cuando se creen los fabricantes
    }

}
