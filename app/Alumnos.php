<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = ['id','nombres','apellidos','no_nie','f_nacimiento','parvularia','enfermedad','nombre_enfermedad','nombre_madre','dui_madre','ocupacion_madre','tel_madre','nombre_padre','dui_padre','ocupacion_padre','tel_padre','vive_con','carta_compro','rendimiento','nuevo_in','esc_procedencia','municipio'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $nombre)
	{
		return $query->where('nombres', 'LIKE', "%$nombre%");
	}
  public function nombreCompleto()
  {
    return $this->nombres . ' ' . $this->apellidos;
  }

}
