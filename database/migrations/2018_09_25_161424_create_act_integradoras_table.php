<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActIntegradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_integradoras', function (Blueprint $table) {
            $table->increments('id');
            $table->float('activi_1');
            $table->float('activi_2');
            $table->float('promedio');
            $table->float('prom_porcent');
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
        Schema::dropIfExists('act_integradoras');
    }
}
