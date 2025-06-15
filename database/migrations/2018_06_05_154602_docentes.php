<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombres',20);
            $table->string('apellidos',20);
            $table->integer('no_escalafon');
            $table->string('no_dui',10);
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('correo');
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
        Schema::dropIfExists('Docentes');
    }
}
