
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirplanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplanes', function (Blueprint $table) {
            $table->id();
            $table->string('serial')->unique();
            $table->string('model');
            $table->float('length');
            $table->integer('capacity');
            $table->float('speed');
            $table->integer('range');
 
            // Añadimos la clave foránea con Manufacturer: manufacturer_id
            $table->unsignedBigInteger('manufacturer_id');
            
            // Indicamos cual es la clave foránea de esta tabla y que se borra en cascada:
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('cascade');
 
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airplanes');
    }
}
