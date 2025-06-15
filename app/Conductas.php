<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductas extends Model
{
    protected $fillable = ['id','id_asignacion_conductas','moral_civica','nota_conducta','observaciones'];
    protected $dates = ['created_at','updated_at'];

       public function scopeCivica($query, $civica)
	{
		return $query->where('moral_civica', 'LIKE', "%$civica%");
	}
}