<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airplane;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Schema;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncamos la tabla para comenzar con una vacía, necesitamos desabilitar la constrain de foreing key para poder hacerlo sin que se queje la base de datos.
        Schema::disableForeignKeyConstraints();
        Manufacturer::truncate();
        Schema::enableForeignKeyConstraints();
 
        // Creamos 2 fabricantes con 10 aviones asociados.
        Manufacturer::factory()
            ->has(Airplane::factory()->count(10))
            ->count(2)->create();
 
        // Creamos 5 fabricantes sin aviones asociados.
        Manufacturer::factory()->count(5)->create();
    }

}
