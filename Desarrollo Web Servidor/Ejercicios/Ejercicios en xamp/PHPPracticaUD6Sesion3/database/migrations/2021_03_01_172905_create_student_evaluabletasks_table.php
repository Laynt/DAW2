<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEvaluabletasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_evaluabletasks', function (Blueprint $table) {
            $table->id();
            $table->double('mark');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('evaluabletask_id');
            $table->timestamps();
            
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade');           
       $table->foreign('evaluabletask_id')->references('id')->on('evaluabletasks')
            ->onDelete('cascade');            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_evaluabletasks');
    }
}
