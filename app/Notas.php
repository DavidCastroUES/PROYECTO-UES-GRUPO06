<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{

    protected $fillable = ['id_asignacion_notas','nota_trimestral','trimestre','observaciones','id_integradoras','id_cotidianas','id_pruebas','id_conducta','id_materia','id_asignacion_alumno'];
    protected $dates = ['created_at','updated_at'];

    public function scopeTrimestral($query, $trimestral)
    {
        return $query->where('nota_trimestral', 'LIKE', "%$trimestral%");
    }

    public function ActIntegradoras(){
    return $this->belongsTo('App\ActIntegradoras', 'id_integradoras');
    }

    public function ActCotidianas(){
    return $this->belongsTo('App\ActCotidianas', 'id_cotidianas');
    }

    public function Pruebas(){
        return $this->belongsTo('App\Pruebas', 'id_pruebas');
    }

    public function Conducta(){
        return $this->belongsTo('App\Conducta', 'id_conducta');
    }
        public function Materias(){
        return $this->belongsTo('App\Materias', 'id_materia');
    }

        public function AsignacionAlumnosNotas(){
        return $this->belongsTo('App\AsignacionAlumnosNotas', 'id_asignacion_alumno');
    }

	}


