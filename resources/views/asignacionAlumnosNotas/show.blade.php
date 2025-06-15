@extends('layouts.app')
@section('content')
<div class="row"  >
   <div class="col-lg-12 margin-tb">
      <div class="pull-left ">
         <h2 > Datos de la Asignacion Alumno-Grado</h2>
         <br>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Alumno : </strong>
         {{ $asignacionAlumnoNota->Alumnos->nombres}} {{ $asignacionAlumnoNota->Alumnos->apellidos}}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Docente : </strong>
         {{ $asignacionAlumnoNota->asignaciones->Docentes->User->name}}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Grado : </strong>
         {{ $asignacionAlumnoNota->asignaciones->Grados->nombre}} {{ $asignacionAlumnoNota->asignaciones->Grados->seccion}}
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Estado Academico : </strong>
         {{ $asignacionAlumnoNota->estado_academico}} 
      </div>
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
         <strong>Año de Asignacion : </strong>
         {{ $asignacionAlumnoNota->anio}}
      </div>
   </div>
   <br/>
   <a href="{{ route('asignacionAlumnosNotas.index')}}" class="btn btn-primary">
   <i class="glyphicon glyphicon-arrow-left"> Regresar</i>
   </a>
</div>
@endsection