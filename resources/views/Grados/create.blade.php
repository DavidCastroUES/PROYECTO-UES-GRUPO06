@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align: center;"> DATOS DE GRADO </h2>
    	<br>
    	@if ($message = Session::get('error'))
		<div class="alert alert-danger">
		   <p>{{ $message }}</p>
		</div>
		@endif
      {{ Form::open(['route'=>'grados.store', 'method'=>'POST']) }}
        @include('grados.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection