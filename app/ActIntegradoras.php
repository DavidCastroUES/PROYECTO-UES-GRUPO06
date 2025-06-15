<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActIntegradoras extends Model
{
    protected $fillable = ['id','activi_1','activi_2','promedio_i','prom_i_porcent','id_asignacion_notas'];
    protected $dates = ['created_at','updated_at'];

    public function scopeActivi($query, $activi)
	{
		return $query->where('activi_1', 'LIKE', "%$activi%");
	}

}
