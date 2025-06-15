<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pruebas extends Model
{
   protected $fillable = ['id','laboratorio','examen','promedio_p','prom_p_porcent','id_asignacion_notas'];
    protected $dates = ['created_at','updated_at'];

        public function scopeLaboratorio($query, $laboratorio)
	{
		return $query->where('laboratorio', 'LIKE', "%$laboratorio%");
	}
}
