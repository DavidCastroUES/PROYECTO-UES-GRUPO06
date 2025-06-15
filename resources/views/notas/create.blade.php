@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2> Ingreso de notas del Alumno: </h2>
    	<br>
      {{ Form::open(['route'=>'notas.store', 'method'=>'POST']) }}
        @include('notas.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection
