@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2> Actualización de Datos: </h2>
    	<br>
      {{ Form::model($nota,['route'=>['notas.update',$nota->id],'method'=>'PATCH'],$nota->conducta,['route'=>['notas.update',$nota->conducta->id],'method'=>'PATCH'],$nota->pruebas,['route'=>['notas.update',$nota->pruebas->id],'method'=>'PATCH']) }}

      @include('notas.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection