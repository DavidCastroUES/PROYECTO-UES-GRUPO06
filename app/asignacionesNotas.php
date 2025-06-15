<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionesNotas extends Model
{

    protected $fillable = ['id_asignacion_notas','nota_trimestral','trimestre','id_integradoras','id_cotidianas','id_pruebas','id_conducta','id_materia'];
    protected $dates = ['created_at','updated_at'];

    public function scopeTrimestre($query, $trimestre)
    {
        return $query->where('trimestre', 'LIKE', "%$trimestre%");
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

    }