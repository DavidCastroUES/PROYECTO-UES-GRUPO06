    <div class="row">
    <div class="col-sm-2">
      {!! form::label('ALumno') !!}
    </div>
     <div class="col-sm-10">
      <div class="form-group {{ $errors->has('id_asignacion_alumno') ? 'has-error' : "" }}">
      <i><select name="id_asignacion_alumno" class="form-control">
                <option disabled selected>Seleccione Alumno</option>
                @foreach($asignaAlumno as $asigAlumno)
                      <option value="{{$asigAlumno->id}}">{{$asigAlumno->id}}. {{$asigAlumno->alumnos->nombres}} 
                                      {{$asigAlumno->alumnos->apellidos}}
                      </option>
                @endforeach
            </select></i>  
            <div class="help-block"> 
                <strong>{{ $errors->first('id_asignacion_alumno', 'Seleccione uno') }}</strong>
          </div> 
  </div>
</div>
 </div>


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
    <div class="col-sm-4">
      {!! form::label('activi_1','Act. Integradora 1') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('activi_1') ? 'has-error' : "" }}">
       <i>{{ Form::text('activi_1',NULL, ['class'=>'form-control', 'id'=>'activi_1', 'placeholder'=>'Nota Act. 1']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('activi_1', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

   <div class="row">
    <div class="col-sm-4">
      {!! form::label('activi_2','Act. Integradora 2') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('activi_2') ? 'has-error' : "" }}">
       <i>{{ Form::text('activi_2',NULL, ['class'=>'form-control', 'id'=>'activi_2', 'placeholder'=>'Nota Act. 2']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('activi_2', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

     <div class="row">
    <div class="col-sm-4">
      {!! form::label('promedio_i','Prom. Integradoras') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('promedio_i') ? 'has-error' : "" }}">
       <i>{{ Form::text('promedio_i',NULL, ['class'=>'form-control', 'id'=>'promedio_i', 'placeholder'=>'Promedio Integradoras']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('promedio_i', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

     <div class="row">
    <div class="col-sm-4">
      {!! form::label('prom_i_porcent','35%') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('prom_i_porcent') ? 'has-error' : "" }}">
       <i>{{ Form::text('prom_i_porcent',NULL, ['class'=>'form-control', 'id'=>'prom_i_porcent', 'placeholder'=>'Nota 35%']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('prom_i_porcent', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

 <div class="row">
    <div class="col-sm-4">
      {!! form::label('nota_cotidiana','Act. Cotidiana') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('nota_cotidiana') ? 'has-error' : "" }}">
       <i>{{ Form::text('nota_cotidiana',NULL, ['class'=>'form-control', 'id'=>'nota_cotidiana', 'placeholder'=>'Nota Act. Cotidiana']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nota_cotidiana', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-4">
      {!! form::label('nota_porcen','35%') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('nota_porcen') ? 'has-error' : "" }}">
       <i>{{ Form::text('nota_porcen',NULL, ['class'=>'form-control', 'id'=>'nota_porcen', 'placeholder'=>'Nota 35%']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nota_porcen', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      {!! form::label('laboratorio','Laboratorio') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('laboratorio') ? 'has-error' : "" }}">
       <i>{{ Form::text('laboratorio',NULL, ['class'=>'form-control', 'id'=>'laboratorio', 'placeholder'=>'Nota Laboratorio']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('laboratorio', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-4">
      {!! form::label('examen','Examen') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('examen') ? 'has-error' : "" }}">
       <i>{{ Form::text('examen',NULL, ['class'=>'form-control', 'id'=>'examen', 'placeholder'=>'Nota Examen']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('examen', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-4">
      {!! form::label('promedio_p','Prom. Evaluaciones') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('promedio_p') ? 'has-error' : "" }}">
       <i>{{ Form::text('promedio_p',NULL, ['class'=>'form-control', 'id'=>'promedio_p', 'placeholder'=>'Promedio de Evaluaciones']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('promedio_p', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col-sm-4">
      {!! form::label('prom_p_porcent','Prom. 30%') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('prom_p_porcent') ? 'has-error' : "" }}">
       <i>{{ Form::text('prom_p_porcent',NULL, ['class'=>'form-control', 'id'=>'prom_p_porcent', 'placeholder'=>'Promedio 30%']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('prom_p_porcent', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

     <div class="row">
    <div class="col-sm-4">
      {!! form::label('moral_civica','Ponderacion') !!}
    </div>
  <div class="col-sm-8">
    <div class="form-group {{ $errors->has('moral_civica') ? 'has-error' : "" }}">
      
            <select name="moral_civica" class="form-control">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="NM">Necesita Mejorar</option>
                <option value="B">Bueno</option>
                <option value="MB">Muy Bueno</option>
                <option value="E">Exelente</option>
            </select>
           
            <div class="help-block" >
               <strong>{{ $errors->first('moral_civica', 'Obligatorio') }}</strong> 
           </div>
        </div>
    </div>
  </div>

      <div class="row">
    <div class="col-sm-4">
      {!! form::label('nota_conducta','Conducta') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('nota_conducta') ? 'has-error' : "" }}">
       <i>{{ Form::text('nota_conducta',NULL, ['class'=>'form-control', 'id'=>'nota_conducta', 'placeholder'=>'Conducta']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nota_conducta', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

        <div class="row">
    <div class="col-sm-4">
      {!! form::label('nota_trimestral','Nota Trimestral') !!}
    </div>
    <div class="col-sm-8">
      <div class="form-group {{ $errors->has('nota_trimestral') ? 'has-error' : "" }}">
       <i>{{ Form::text('nota_trimestral',NULL, ['class'=>'form-control', 'id'=>'nota_trimestral', 'placeholder'=>'Nota Trimestral']) }}</i> 
        <div class="help-block" > 
          <strong>{{ $errors->first('nota_trimestral', '**Ingrese datos válidos 0-10') }}</strong>
      </div>
      </div>
    </div>
  </div>

    <br>
      <div class="form-group text-center" >
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success','type'=>'submit']) }}
      <a class="btn btn-danger" href="{{ route('notas.index') }}">Cancelar</a>
    </div>

