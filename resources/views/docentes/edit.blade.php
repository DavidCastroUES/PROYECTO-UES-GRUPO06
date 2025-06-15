@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    	<h2 style="text-align:center"> ACTUALIZACION DE DATOS </h2>
    	<br>
    	@if ($message = Session::get('error'))
		<div class="alert alert-danger">
		   <p>{{ $message }}</p>
		</div>
		@endif
      {{ Form::model($docente,['route'=>['docentes.update',$docente->id],'method'=>'PATCH']) }}
         <div class="row">
    <div class="col-sm-2">
      {!! form::label('Nombre') !!}
    </div> 
     <div class="col-sm-10">
      <div class="form-group {{ $errors->has('id_usuario') ? 'has-error' : "" }}">
      <i><select name="id_usuario" class="form-control">
               <option selected value="{{$docente->User->id}}">{{$docente->User->id}}. {{$docente->User->name}}</option>
            </select></i>
            <div class="help-block"> 
                <strong>{{ $errors->first('id_usuario', 'Seleccione uno') }}</strong>
          </div>
 </div>
</div>
 </div>
    <div class="row">
    <div class="col-sm-5">
      {!! form::label('no_dui','Numero de DUI') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_dui') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_dui',NULL, ['class'=>'form-control', 'id'=>'no_dui', 'placeholder'=>'xxxxxxxx-x','maxlength' => 10]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_dui', 'Ingrese DUI correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
  <div class="row">
    <div class="col-sm-5">
      {!! form::label('no_escalafon','Numero de Escalafón') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('no_escalafon') ? 'has-error' : "" }}">
       <i>{{ Form::text('no_escalafon',NULL, ['class'=>'form-control', 'id'=>'no_escalafon', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('no_escalafon', 'Ingrese Escalafón correctamente') }}</strong>
      </div>
    </div>
    </div>
   </div>
   <div class="row">
    <div class="col-sm-5">
      {!! form::label('telefono','Teléfono (Sin guiones)') !!}
    </div>
    <div class="col-sm-5">
      <div class="form-group {{ $errors->has('telefono') ? 'has-error' : "" }}">
       <i>{{ Form::text('telefono',NULL, ['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'xxxxxxxx','maxlength' => 8]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('telefono', 'Ingrese Teléfono correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>
   <div class="row">
    <div class="col-sm-5">
      {!! form::label('direccion','Direccion') !!}
    </div>
    <div class="form-group {{ $errors->has('direccion') ? 'has-error' : "" }}">
      <i>{{Form :: text ('direccion', NULL, ['class'=>'form-control', 'id'=>'direccion', 'placeholder'=>'Direccion'])}}</i>
        <div class="help-block"> 
          <strong>{{ $errors->first('direccion', 'Ingrese Direccion correctamente') }}</strong>
    </div>
    </div>
    </div>
 
    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success ','type'=>'submit']) }}
      <a class="btn btn-danger " href="{{ route('docentes.index') }}">Cancelar</a>
    </div>
 
      {{ Form::close() }}
    </div>
  </div>
@endsection