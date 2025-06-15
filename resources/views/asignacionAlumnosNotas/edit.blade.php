@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> Actualizacion de Asignacion Alumno-Grado, {{$Y}}, {{$grado_actual->nombre}} {{$grado_actual->seccion}}</h2>
    	<br>
      {{ Form::model($asignacionAlumnoNota,['route'=>['asignacionAlumnosNotas.update',$asignacionAlumnoNota->id],'method'=>'PATCH']) }}
      @include('asignacionAlumnosNotas.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection