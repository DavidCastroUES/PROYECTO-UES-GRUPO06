@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ACTUALIZACION DE ASIGNACION MATERIA, GRADO Y DOCENTE </h2>
    	<br>
      {{ Form::model($asignacionnotas,['route'=>['asignacionNotas.update',$asignacionnotas->id],'method'=>'PATCH']) }}
      @include('asignacionNotas.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection