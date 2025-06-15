@extends('layouts.app')
@section('content')
<div class="row">
   <?php $Y= date("Y");
      $Y2=$Y+'1';// echo $Y2; 
      ?>
   @php ($asig_docente = $asignaciones->where('id_docente', $asignacion_alumnos->id_docente)->where('anio', $Y )->first())
   <!--{{$asignacion_alumnos}}-->
   <div class="col-md-12">
      <h2 style="text-align:center"> Ingreso de Asignacion Alumno-Grado, {{$asig_docente->grados->nombre}} {{$asig_docente->grados->seccion}}, {{$Y}}.</h2>
      <h3 style="text-align:center">Asignaciones para alumnos de Nuevo ingreso.</h3>
      <h4 style="text-align:center">Tenga en cuenta que si no hay alumnos nuevos no podrá hacer la asignación.</h4>
      <br><br>
      <div class="col-md-6 col-md-offset-3">
         {{ Form::open(['route'=>'asignacionAlumnosNotas.store', 'method'=>'POST']) }}
         <div class="row">
            <div class="col-sm-4">
               {!! form::label('Docente - Grado') !!}
            </div>
            <!--{{$asignacion_alumnos}}
               {{$asignaciones}}-->
            <div class="col-sm-8">
               <div class="form-group">
                  <i>
                     <select name="id_asignacion" class="form-control">
                        <option value="{{$asig_docente->id}}">{{$asig_docente->id}}. {{$asig_docente->docentes->User->name}} - {{$asig_docente->grados->nombre}} {{$asig_docente->grados->seccion}} - {{$asig_docente->anio}}</option>
                     </select>
                  </i>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-4">
               {!! form::label('Alumno') !!}
            </div>
            <div class="col-sm-8">
               <div class="form-group">
                  <i>
                     <select name="id_alumno" class="form-control">
                        @foreach($alumnos as $alumno)
                        <option required value="{{$alumno->id}}">{{$alumno->id}}. {{$alumno->nombres}} {{$alumno->apellidos}}</option>
                        @endforeach
                     </select>
                  </i>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-4">
               {!! form::label('Año') !!}
            </div>
            <div class="col-sm-5">
               <div class="form-group">
                  <i>
                     <select name="anio" class="form-control">
                        <option selected value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
                        <!-- <option value="<?php echo $Y2;?>"><?php echo $Y2;?></option> ?-->
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
         {{ form::close() }}
      </div>
   </div>
</div>
@endsection