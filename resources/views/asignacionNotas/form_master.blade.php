    <div class="row">
    <div class="col-sm-2">
      {!! form::label('Materia') !!}
    </div>
     <div class="col-sm-10">
      <div class="form-group {{ $errors->has('id_materia') ? 'has-error' : "" }}">
      <i><select name="id_materia" class="form-control">
                <option disabled selected>Seleccione materia</option>
                @foreach($materias as $materia)
                      <option value="{{$materia->id}}">{{$materia->id}}. {{$materia->nombre}}</option>
                 @endforeach
            </select></i>  
            <div class="help-block"> 
                <strong>{{ $errors->first('id_materia', 'Seleccione uno') }}</strong>
          </div> 
  </div>
</div>
 </div>

 <div class="row">
    <div class="col-sm-2">
      {!! form::label('trimestre','Trimestre') !!}
    </div>
    <div class="col-sm-4">
      <div class="form-group {{ $errors->has('trimestre') ? 'has-error' : "" }}">
       <i>{{ Form::text('trimestre',NULL, ['class'=>'form-control', 'id'=>'trimestre', 'placeholder'=>'00','maxlength' => 4]) }} </i> 
        <div class="help-block"> 
          <strong>{{ $errors->first('trimestre', '**Ingrese un Trimestre correctamente') }}</strong>
      </div>
    </div>
  </div>
      </div>

    <br>
       <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success','type'=>'submit']) }}
      <a class="btn btn-danger" href="{{ route('asignacionNotas.index') }}">Cancelar</a>
    </div>
 