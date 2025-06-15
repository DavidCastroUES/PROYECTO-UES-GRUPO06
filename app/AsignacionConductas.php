<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionConductas extends Model
{
    protected $fillable = ['id','id_asignacion_conductas','id_asignacion_alumno', 'id_trimestre'];
    protected $dates = ['created_at','updated_at'];

    public function scopeTrimestral($query, $trimestral)
    {
        return $query->where('id', 'LIKE', "%$trimestral%");
    }

    public function Trimestre(){
        return $this->belongsTo('App\Trimestre', 'id_trimestre');
    }

    public function AsignacionAlumnosNotas(){
        return $this->belongsTo('App\AsignacionAlumnosNotas', 'id_asignacion_alumno');
    }

    public function Conductas(){
        return $this->hasMany('App\Conductas', 'id_asignacion_conductas');
    }

}
