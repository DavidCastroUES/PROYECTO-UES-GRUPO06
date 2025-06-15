<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotasModulesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    function it_create_a_new_nota(){
    $this->post('/notas/',[
          'nota_trimestral' => '8',
          'nota_cotidiana' => '8',
          'nota_porcent'=>'0.28',
          'activi_1'=>'8',
          'activi_2'=>'8',
          'promedio_i'=>'8',
          'prom_i_porcent'=>'2.8',
          'laboratorio'=>'8',
          'examen'=>'8',
          'promedio_p'=>'8',
          'prom_p_porcent'=>'2.4'
      ])->assertRedirect('notas.index');
    $this->assertCredentials([
        'nota_trimestral' => '8',
          'nota_cotidiana' => '8',
          'nota_porcent'=>'0.28',
          'activi_1'=>'8',
          'activi_2'=>'8',
          'promedio_i'=>'8',
          'prom_i_porcent'=>'2.8',
          'laboratorio'=>'8',
          'examen'=>'8',
          'promedio_p'=>'8',
          'prom_p_porcent'=>'2.4'
    ]);
}
}