<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretarias extends Model
{
    protected $fillable = ['id_roles','nombre','apellido'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombre', 'LIKE', "%$nombre%");
	}
}
