<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActCotidianas extends Model
{
    protected $fillable = ['id','nota_cotidiana','nota_porcent','id_asignacion_notas'];
    protected $dates = ['created_at','updated_at'];

    public function scopeCotidiana($query, $cotidiana)
	{
		return $query->where('nota_cotidiana', 'LIKE', "%$cotidiana%");
	}
}
