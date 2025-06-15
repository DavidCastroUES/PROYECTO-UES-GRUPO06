<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nombres',20);
            $table->string('apellidos',20);
            $table->string('correo');
            $table->integer('no_nie');
            $table->string('grado',20);
            $table->string('t_matricula',20);
            $table->date('f_nacimiento');
            $table->integer('edad');            
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
        //
    }
}
