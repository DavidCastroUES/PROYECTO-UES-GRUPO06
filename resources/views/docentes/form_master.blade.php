   <div class="row">
    <div class="col-sm-2">
      {!! form::label('Nombre') !!}
    </div>
     <div class="col-sm-8">
      <div class="form-group {{ $errors->has('id_usuario') ? 'has-error' : "" }}">
      <i><select name="id_usuario" class="form-control">
               <option disabled selected>Seleccione el docente</option>
                @foreach($users as $user)
                      <option value="{{$user->id}}">{{$user->id}}. {{$user->name}}</option>
                 @endforeach
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
 