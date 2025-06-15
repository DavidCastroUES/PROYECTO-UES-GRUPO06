<div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Nombre') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
       <i>{{ Form::text('nombre',NULL, ['class'=>'form-control', 'id'=>'nombre', 'placeholder'=>'Nombre de la Materia...']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nombre', '**Ingrese datos válidos A-Z') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="form-group text-center">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success','type'=>'submit']) }}
      <a class="btn btn-danger" href="{{ route('materias.index') }}">Cancelar</a>
    </div>