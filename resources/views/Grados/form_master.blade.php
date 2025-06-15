 <div class="row">
    <div class="col-sm-2">
      {!! form::label('nombre','Grado *') !!}
    </div>

    <div class="col-sm-5">
    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : "" }}">
      
            <select name="nombre" class="form-control">
                <option value="{{old('nombre')}}" placeholder="Buscar">{{old('nombre')}}
                @if(old('nombre')==null)
                Seleccione opcion
              @endif
            </option>
                <option>Kinder</option>
                <option>Preparatoria</option>
                <option>Primero</option>
                <option>Segundo</option>
                <option>Tercero</option>
                <option>Cuarto</option>
                <option>Quinto</option>
                <option>Sexto</option>
                <option>Séptimo</option>
                <option>Octavo</option>
                <option>Noveno</option>
            </select>
           
            <div class="help-block" >
               <strong>{{ $errors->first('nombre', 'Obligatorio') }}</strong> 
           </div>
        </div>
    </div>
  </div>

   <div class="row">
    <div class="col-sm-2">
      {!! form::label('seccion','Sección *') !!}
    </div>
    <div class="col-sm-5">
         <div class="form-group {{ $errors->has('seccion') ? 'has-error' : "" }}">
           <select name="seccion" id="seccion" class="form-control">
                <option value="{{old('seccion')}}">{{old('seccion')}}
                @if(old('seccion')==null)
                Seleccione opcion
              @endif</option>
                <option>A</option>
                <option>B</option>
            </select >
            <div class="help-block" >
        <strong>{{ $errors->first('seccion', 'Obligatorio') }}</strong> 
      </div>
        </div>
   </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('capacidad','Capacidad*') !!}
    </div>
    <div class="col-sm-6">
      <div class="form-group {{ $errors->has('capacidad') ? 'has-error' : "" }}">
        <i>{{ Form::text('capacidad',NULL, ['class'=>'form-control', 'id'=>'capacidad', 'placeholder'=>'Capacidad del grado...']) }}</i>
        <div class="help-block" >
        <strong>{{ $errors->first('Capacidad', 'Ingrese datos válidos 1-9') }}</strong> 
      </div>
      </div>
    </div>
    </div>

    <div class="form-group text-center">
      {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success','type'=>'submit']) }}
      <a class="btn btn-danger" href="{{ route('grados.index') }}">Cancelar</a>
    </div>