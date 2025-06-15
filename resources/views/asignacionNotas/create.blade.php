@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ASIGNACION DE MATERIA, A NOTAS</h2>
    	<br>
      {{ Form::open(['route'=>'asignacionNotas.store', 'method'=>'POST']) }}
        @include('asignacionNotas.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection