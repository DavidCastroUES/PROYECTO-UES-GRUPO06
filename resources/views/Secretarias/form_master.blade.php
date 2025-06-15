    <div class="row">
    <div class="col-sm-2">
      {!! form::label('id_roles','Roles') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('id_roles') ? 'has-error' : "" }}">
       <i>{{ Form::text('id_roles',NULL, ['class'=>'form-control', 'id'=>'id_roles', 'placeholder'=>'Rol de la secretaria...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('corre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <!-- -->
    <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre de la secretaria...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('corre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('apellido','Apellido') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('apellido') ? 'has-error' : "" }}">
       <i>{{ Form::text('apellido',NULL, ['class'=>'form-control', 'id'=>'apellido', 'placeholder'=>'Apellido de la secretaria...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('apellido', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="form-group text-center">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success btn-lg','type'=>'submit']) }}
      <a class="btn btn-danger btn-lg" href="{{ route('secretarias.index') }}">Cancelar</a>
    </div>