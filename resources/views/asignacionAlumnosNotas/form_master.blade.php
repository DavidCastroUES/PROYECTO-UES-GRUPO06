<div class="row">
   <div class="col-sm-2">
      {!! form::label('Asignacion') !!}
   </div>
   <div class="col-sm-10">
      <div class="form-group">
         <i>
            <select name="id_asignacion" class="form-control">
               <option selected value="{{$asignacionAlumnoNota->asignaciones->id}}">{{$asignacionAlumnoNota->asignaciones->id}}. {{$asignacionAlumnoNota->asignaciones->Docentes->User->name}} - {{$asignacionAlumnoNota->asignaciones->grados->nombre}} {{$asignacionAlumnoNota->asignaciones->grados->seccion}}</option>
            @foreach($grados_actual as $ga)
            @php($Asigna= $asignaciones->where('id_grado', $ga->id)->where('anio', $Y )->first())
            <option value="{{$Asigna->id}}">{{$Asigna->id}}. {{$Asigna->Docentes->User->name}} - {{$Asigna->grados->nombre}} {{$Asigna->grados->seccion}}</option>
            @endforeach
            </select>
         </i>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-2">
      {!! form::label('Alumno') !!}
   </div>
   <div class="col-sm-10">
      <div class="form-group">
         <i>
            <select name="id_alumno" class="form-control">
               <option selected value="{{$asignacionAlumnoNota->alumno->id}}">{{$asignacionAlumnoNota->alumno->id}}. {{$asignacionAlumnoNota->alumno->nombres}} {{$asignacionAlumnoNota->alumno->apellidos}}</option>
            @foreach($grados_actual as $ga)
            @php($Asigna= $asignaciones->where('id_grado', $ga->id)->where('anio', $Y ))
            @foreach($Asigna as $asign)
            @php($Asi= $asignacionAl->where('id_asignacion', $asign->id)->where('anio', $Y ))
            @foreach($Asi as $Asss)
            @php($Alum = $alumnos->where('id', $Asss->id_alumno))
            @foreach($Alum as $Al)
            <option value="{{$Al->id}}">{{$Al->id}}. {{$Al->nombres}} {{$Al->apellidos}}</option>
            @endforeach
            @endforeach
            @endforeach
            @endforeach
            </select>
         </i>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-2">
      {!! form::label('Año') !!}
   </div>
   <div class="col-sm-5">
      <?php $Y= date("Y");
         $Y2=$Y+'1';
         ?>
      <div class="form-group">
         <i>
            <select name="anio" class="form-control">
               <option selected value="{{$asignacionAlumnoNota->anio}}">{{$asignacionAlumnoNota->anio}}</option>
               <option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
            </select>
         </i>
      </div>
   </div>
</div>
<br>
<div class="form-group text-center" >
   {{ Form::button(isset($model)? 'Update' : 'Guardar' , ['class'=>'btn btn-success','type'=>'submit']) }}
   <a class="btn btn-danger" href="{{ route('asignacionAlumnosNotas.index') }}">Cancelar</a>
</div>