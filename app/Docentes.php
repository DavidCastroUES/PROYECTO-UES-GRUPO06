<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable = ['id_usuario','no_dui','no_escalafon','telefono','direccion','id_docente','id_asignacion'];
    protected $dates = ['created_at','updated_at'];

  public function scopeNombre($query, $id_usuario)
	{
		return $query->where('id_usuario', 'LIKE', "%$id_usuario%");
	}

  public function user(){
    return $this->belongsTo('App\User', 'id_usuario');
  }
  
  public function asignacion(){
    return $this->hasOne('App\Asignaciones', 'id_docente');
  }
  
  public function AsignacionesAlumnos(){
    return $this->hasOne('App\AsignacionAlumnosNotas', 'id_asignacion');
  }

}
