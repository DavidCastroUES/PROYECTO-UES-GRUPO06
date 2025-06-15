@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> Actualización de Asignación: Docente a Grado </h2>
    	<br>
      {{ Form::model($asignacion,['route'=>['asignaciones.update',$asignacion->id],'method'=>'PATCH']) }}
      @include('asignaciones.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection