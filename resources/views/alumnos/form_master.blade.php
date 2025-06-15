<div class="col-sm-12">
   <div class="col-sm-5">
      <div class="row">
         <div>
            {!! form::label('nombres','Nombres Alumno *') !!}
         </div>
         <div class="col-sm-0">
            <div class="form-group {{ $errors->has('nombres') ? 'has-error' : "" }}">
            <i>{{ Form::text('nombres',NULL, ['class'=>'form-control', 'id'=>'nombres', 'placeholder'=>'Nombres del alumno...']) }}</i> 
            <div class="help-block" > 
               <strong>{{ $errors->first('nombres', '**Ingrese datos válidos A-Z,a-z') }}</strong>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div>
         {!! form::label('apellidos','Apellidos Alumno *') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('apellidos') ? 'has-error' : "" }}">
         <i>{{ Form::text('apellidos',NULL, ['class'=>'form-control', 'id'=>'apellidos', 'placeholder'=>'Apellidos del alumno...']) }}</i>
         <div class="help-block" >
            <strong>{{ $errors->first('apellidos', '**Ingrese datos válidos A-Z,a-z') }}</strong> 
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div>
      {!! form::label('no_nie','Numero de NIE *') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('no_nie') ? 'has-error' : "" }}">
      <i>{{ Form::text('no_nie',NULL, ['class'=>'form-control', 'id'=>'no_nie', 'placeholder'=>'xxxxxxx','maxlength' => 7]) }} </i> 
      <div class="help-block"> 
         <strong>{{ $errors->first('no_nie', '**Ingrese NIE correctamente') }}</strong>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div >
      {!! form::label('f_nacimiento','Fecha de nacimiento *') !!}
   </div>
   <div class="col-sm-0">
      <div class="input-group {{ $errors->has('f_nacimiento') ? 'has-error' : "" }}">
      <i>{{ Form::text('f_nacimiento',NULL, ['class'=>'form-control', 'id'=>'f_nacimiento','type'=>'text', 'placeholder'=>'Fecha(yyyy-mm-dd)']) }} </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('f_nacimiento', '**Ingrese la Fecha correctamente') }}</strong>
      </div>
   </div>
</div>
</div>
<br>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-5">
   <div class="row">
      <div ">
         {!! form::label('Estudio Parvularia? *') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('parvularia') ? 'has-error' : "" }}">
         <i>
            <select name="parvularia" class="form-control">
               <option disabled selected>Seleccione opcion</option>
               <option value="Si">Si</option>
               <option value="No">No</option>
            </select>
         </i>
         <div class="help-block"> 
            <strong>{{ $errors->first('parvularia', 'Seleccione uno') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div ">
      {!! form::label('Padece Enfermedad? *') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('enfermedad') ? 'has-error' : "" }}">
      <i>
         <select name="enfermedad" class="form-control">
            <option disabled selected>Seleccione opcion</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
         </select>
      </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('enfermedad', 'Seleccione uno') }}</strong>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div>
      {!! form::label('nombre_enfermedad','Describa Enfermedad') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('nombre_enfermedad') ? 'has-error' : "" }}">
      <i>{{ Form::text('nombre_enfermedad',NULL, ['class'=>'form-control', 'id'=>'nombre_enfermedad', 'placeholder'=>'Que enfermedad Padece?']) }}</i> 
      <div class="help-block" > 
         <strong>{{ $errors->first('nombre_enfermedad', '**Ingrese datos válidos A-Z,a-z') }}</strong>
      </div>
   </div>
</div>
</div>
</div>
</div>
<div class="col-sm-12">
   <h4><strong>Datos de los Padres</strong></h4>
   <br>
   <div class="col-sm-5">
      <div class="row">
         <div>
            {!! form::label('nombre_madre','Nombre de la Madre *') !!}
         </div>
         <div class="col-sm-0">
            <div class="form-group {{ $errors->has('nombre_madre') ? 'has-error' : "" }}">
            <i>{{ Form::text('nombre_madre',NULL, ['class'=>'form-control', 'id'=>'nombre_madre', 'placeholder'=>'Nombre de la Madre']) }}</i> 
            <div class="help-block" > 
               <strong>{{ $errors->first('nombre_madre', '**Ingrese datos válidos A-Z,a-z') }}</strong>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div>
         {!! form::label('dui_madre','DUI de la Madre (Sin Guiones)') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('dui_madre') ? 'has-error' : "" }}">
         <i>{{ Form::text('dui_madre',NULL, ['class'=>'form-control', 'id'=>'dui_madre', 'placeholder'=>'DUI xxxxxxxx-x','maxlength' => 10]) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('dui_madre', '**Ingrese datos válidos 1-9') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
      <div>
         {!! form::label('ocupacion_madre','Ocupación de la Madre.') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('ocupacion_madre') ? 'has-error' : "" }}">
         <i>{{ Form::text('ocupacion_madre',NULL, ['class'=>'form-control', 'id'=>'ocupacion_madre', 'placeholder'=>'Ocupación de la Madre']) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('ocupacion_madre', '**Ingrese datos válidos A-Z,a-z') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
      <div>
         {!! form::label('tel_madre','Teléfono de la Madre. (Sin Guiones)') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('tel_madre') ? 'has-error' : "" }}">
         <i>{{ Form::text('tel_madre',NULL, ['class'=>'form-control', 'id'=>'tel_madre', 'placeholder'=>'Teléfono de la Madre.', 'maxlength' => 8]) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('tel_madre', '**Ingrese datos válidos 1-9') }}</strong>
         </div>
      </div>
   </div>
</div>
</div>
<div class="col-sm-1"></div>
   <div class="col-sm-5">
      <div class="row">
         <div>
            {!! form::label('nombre_padre','Nombre de la Padre *') !!}
         </div>
         <div class="col-sm-0">
            <div class="form-group {{ $errors->has('nombre_padre') ? 'has-error' : "" }}">
            <i>{{ Form::text('nombre_padre',NULL, ['class'=>'form-control', 'id'=>'nombre_padre', 'placeholder'=>'Nombre del Padre']) }}</i> 
            <div class="help-block" > 
               <strong>{{ $errors->first('nombre_padre', '**Ingrese datos válidos A-Z,a-z') }}</strong>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div>
         {!! form::label('dui_padre','DUI de la Padre (Sin Guiones)') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('dui_padre') ? 'has-error' : "" }}">
         <i>{{ Form::text('dui_padre',NULL, ['class'=>'form-control', 'id'=>'dui_padre', 'placeholder'=>'DUI xxxxxxxx-x','maxlength' => 10]) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('dui_padre', '**Ingrese datos válidos 1-9') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
      <div>
         {!! form::label('ocupacion_padre','Ocupación del Padre.') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('ocupacion_padre') ? 'has-error' : "" }}">
         <i>{{ Form::text('ocupacion_padre',NULL, ['class'=>'form-control', 'id'=>'ocupacion_padre', 'placeholder'=>'Ocupación del Padre']) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('ocupacion_padre', '**Ingrese datos válidos A-Z,a-z') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
      <div>
         {!! form::label('tel_padre','Teléfono del Padre. (Sin Guiones)') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('tel_padre') ? 'has-error' : "" }}">
         <i>{{ Form::text('tel_padre',NULL, ['class'=>'form-control', 'id'=>'tel_padre', 'placeholder'=>'Teléfono de la Madre.', 'maxlength' => 8]) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('tel_padre', '**Ingrese datos válidos 1-9') }}</strong>
         </div>
      </div>
   </div>
</div><br>
</div>
</div>

<div class="col-sm-12">
   <h4><strong>Otros Datos del Alumno</strong></h4>
   <br>
   <div class="col-sm-5">
<div class="row">
   <div ">
      {!! form::label('Vive con? *') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('vive_con') ? 'has-error' : "" }}">
      <i>
         <select name="vive_con" class="form-control">
            <option disabled selected>Seleccione opcion</option>
            <option value="Ambos Padres">Ambos Padres</option>
            <option value="Madre">Madre</option>
            <option value="Padre">Padre</option>
            <option value="Otro Encargado">Otro Encargado</option>
         </select>
      </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('vive_con', 'Seleccione uno') }}</strong>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div ">
      {!! form::label('Canta de Compromiso') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('carta_compro') ? 'has-error' : "" }}">
      <i>
         <select name="carta_compro" class="form-control">
            <option disabled selected>Seleccione opcion</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
         </select>
      </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('carta_compro', 'Seleccione uno') }}</strong>
      </div>
   </div>
</div>
</div>
<div class="row">
   <div ">
      {!! form::label('Rendimiento anterior') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('rendimiento') ? 'has-error' : "" }}">
      <i>
         <select name="rendimiento" class="form-control">
            <option disabled selected>Seleccione opcion</option>
            <option value="Excelente">Excelente</option>
                  <option value="Muy bueno">Muy bueno</option>
                  <option value="Bueno">Bueno</option>
                  <option value="Regular">Regular</option>
                  <option value="Malo">Malo</option>
                  <option value="Deficiente">Deficiente</option>
         </select>
      </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('rendimiento', 'Seleccione uno') }}</strong>
      </div>
   </div>
</div>
</div>
</div>
<div class="col-sm-1"></div>
   <div class="col-sm-5">
<div class="row">
   <div ">
      {!! form::label('Nuevo Ingreso? *') !!}
   </div>
   <div class="col-sm-0">
      <div class="form-group {{ $errors->has('nuevo_in') ? 'has-error' : "" }}">
      <i>
         <select name="nuevo_in" class="form-control">
            <option disabled selected>Seleccione opcion</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
         </select>
      </i>
      <div class="help-block"> 
         <strong>{{ $errors->first('nuevo_in', 'Seleccione uno') }}</strong>
      </div>
   </div>
</div>
</div>
   <div class="row">
      <div>
         {!! form::label('esc_procedencia','Escuela de Procedencia:') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('esc_procedencia') ? 'has-error' : "" }}">
         <i>{{ Form::text('esc_procedencia',NULL, ['class'=>'form-control', 'id'=>'esc_procedencia', 'placeholder'=>'Escuela de Procedencia']) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('esc_procedencia', '**Ingrese datos válidos 1-9') }}</strong>
         </div>
      </div>
   </div>
</div>
<div class="row">
      <div>
         {!! form::label('municipio','Municipio de Procedencia:') !!}
      </div>
      <div class="col-sm-0">
         <div class="form-group {{ $errors->has('municipio') ? 'has-error' : "" }}">
         <i>{{ Form::text('municipio',NULL, ['class'=>'form-control', 'id'=>'municipio', 'placeholder'=>'Municipio de Procedencia']) }}</i> 
         <div class="help-block" > 
            <strong>{{ $errors->first('municipio', '**Ingrese datos válidos A-Z,a-z') }}</strong>
         </div>
      </div>
   </div>
</div>
<br>
</div>
</div>

<div class="form-group text-center" >
   {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success ','type'=>'submit']) }}
   <a class="btn btn-danger " href="{{ route('alumnos.index') }}">Cancelar</a>
</div>
<script>
   $.datepicker.regional['es'] = {
   closeText: 'Cerrar',
   prevText: '< Ant',
   nextText: 'Sig >',
   currentText: 'Hoy',
   monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
   monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
   dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
   dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
   dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
   changeMonth: true,
   changeYear: true,
   yearRange: '-30:+0',
   weekHeader: 'Sm',
   dateFormat: 'yy-mm-dd',
   firstDay: 1,
   isRTL: false,
   showMonthAfterYear: false,
   yearSuffix: ''
   };
   $.datepicker.setDefaults($.datepicker.regional['es']);
   $(function () {
   $("#f_nacimiento").datepicker();
   });
</script>