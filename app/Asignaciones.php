<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignaciones extends Model
{
    protected $fillable = ['id_docente','id_grado','anio'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $id_docente)
	{
		return $query->where('id_docente', 'LIKE', "%$id_docente%");
	}

	public function Docentes(){
    return $this->belongsTo('App\Docentes', 'id_docente');
  }

	public function Grados(){
    return $this->belongsTo('App\Grados', 'id_grado');
  }

  public function AsignacionesAlumnos(){
    return $this->hasMany('App\AsignacionAlumnosNotas', 'id_asignacion');
  }
  public function Users(){
      return $this->belongsTo('App\Users', 'id_user');
  }

}
