@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2> Ingreso de datos de la secretaria: </h2>
    	<br>
      {{ Form::open(['route'=>'secretarias.store', 'method'=>'POST']) }}
        @include('secretarias.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection