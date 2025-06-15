@extends('layouts.app')
@section('content')
<div class="row"  >
    <div class="col-lg-12 margin-tb">
        <div class="pull-left ">
            <h2 > DATOS DE LAS NOTAS</h2>
            <br>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alumno : </strong>
            {{ $nota->AsignacionAlumnosNotas->Alumnos->nombres}}
            {{ $nota->AsignacionAlumnosNotas->Alumnos->apellidos}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Materia : </strong>
            {{ $nota->Materias->nombre}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Act. Integradora 1: </strong>
            {{ $nota->ActIntegradoras->activi_1}}
        </div>
    </div>
  
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Act. Integradora 2: </strong>
            {{ $nota->ActIntegradoras->activi_2}}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Promedio: </strong>
            {{ $nota->ActIntegradoras->promedio_i}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>35% </strong>
            {{ $nota->ActIntegradoras->prom_i_porcent}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Act. Cotidiana: </strong>
            {{ $nota->ActCotidianas->nota_cotidiana}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>35%: </strong>
            {{ $nota->ActCotidianas->nota_porcent}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Laboratorio : </strong>
            {{ $nota->Pruebas->laboratorio}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Examen : </strong>
            {{ $nota->Pruebas->examen}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prom. Pruebas : </strong>
            {{ $nota->Pruebas->promedio_p}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>30% : </strong>
            {{ $nota->Pruebas->prom_p_porcent}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Civica : </strong>
            {{ $nota->Conducta->moral_civica}}
        </div>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Conducta : </strong>
            {{ $nota->Conducta->nota_conducta}}
        </div>
    </div>

            <br/>
            <a class="btn btn-primary" href="{{ route('notas.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
    </div>

@endsection
