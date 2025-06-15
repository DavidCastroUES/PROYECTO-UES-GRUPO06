@extends('layouts.app')
@section('content')
<div class="table-responsive ">
   <table class="table table-striped table-bordered" id= "" style="text-align:center">
      <th style="text-align:center">
         <h3><strong>CENTRO ESCOLAR CATOLICO SANTOTOMAS</strong></h3>
         <h3><strong>Datos del Alumno: {{ $alumno->nombres}}, {{ $alumno->apellidos}}</strong></h3>
      </th>
   </table>
   <table class="table table-bordered" id= "" style="text-align:center">
      <thead>
         <tr>
            <th style="text-align:left"><strong>NOMBRE DEL ALUMNO:</strong> 
            </th>
            <th>
               {{ $alumno->nombres .' '. $alumno->apellidos }}
            </th>
            <th style="text-align:left"><strong>NIE</strong>  
            </th>
            <th>
               {{$alumno->no_nie }}
            </th>
            <th style="text-align:left"><strong>FECHA DE NACIMIENTO</strong>  
            </th>
            <th>
               {{$alumno->f_nacimiento }}
            </th>
         </tr>
         <tr>
            <th style="text-align:left"><strong>EDAD</strong>  
            </th>
            <th>
               <?php
                  $cumpleanos = new DateTime($alumno->f_nacimiento);
                  $hoy = new DateTime();
                  $annos = $hoy->diff($cumpleanos);
                  echo $annos->y;
                  ?> Años
            </th>
            <th style="text-align:left"><strong>ESTUDIÓ PARVULARIA?</strong>  
            </th>
            <th>
               {{$alumno->parvularia }}
            </th>
            <th style="text-align:left"><strong>¿PADECE ENFERMEDAD?. </strong>  
            </th>
            <th>
               {{$alumno->enfermedad }}
            </th>
         </tr>
         <tr>
            <th style="text-align:left"><strong>¿CUAL ENFERMEDAD? </strong>  
            </th>
            <th>
               {{$alumno->nombre_enfermedad}}
            </th>
         </tr>
      </thead>
   </table>
   <br>
   <table class="table table-striped table-bordered" id= "" style="text-align:center;">
      <th style="text-align:center">
         <h3><strong>Datos de Padres del Alumno.</strong></h3>
      </th>
   </table>
   <table class="table table-bordered" id= "" style="text-align:center">
      <thead>
         <tr>
            <th colspan="2" style="text-align:left"><strong>NOMBRE DE LA MADRE:</strong> 
            </th>
            <th>
               {{ $alumno->nombre_madre}}
            </th>
            <th style="text-align:left"><strong>DUI DE LA MADRE</strong>  
            </th>
            <th>
               {{$alumno->dui_madre }}
            </th>
         </tr>
         <tr>
            <th colspan="2" style="text-align:left"><strong>OCUPACION DE LA MADRE</strong>  
            </th>
            <th>
               {{$alumno->ocupacion_madre }}
            </th>
            <th style="text-align:left"><strong>TELEFONO DE LA MADRE</strong>  
            </th>
            <th>
               {{$alumno->tel_padre }}
            </th>
         </tr>
         <tr>
            <th colspan="2" style="text-align:left"><strong>NOMBRE DEL PADRE:</strong> 
            </th>
            <th>
               {{ $alumno->nombre_padre}}
            </th>
            <th style="text-align:left"><strong>DUI DEL PADRE</strong>  
            </th>
            <th>
               {{$alumno->dui_padre }}
            </th>
         </tr>
         <tr>
            <th colspan="2" style="text-align:left"><strong>OCUPACION DEL PADRE</strong>  
            </th>
            <th>
               {{$alumno->ocupacion_padre }}
            </th>
            <th style="text-align:left"><strong>TELEFONO DEL PADRE</strong>  
            </th>
            <th>
               {{$alumno->tel_padre }}
            </th>
         </tr>
      </thead>
   </table>
   <br>
   <table class="table table-striped table-bordered" id= "" style="text-align:center">
      <th style="text-align:center;">
         <h3><strong>Otros Datos del Alumno.</strong></h3>
      </th>
   </table>
   <br>
   <table class="table table-bordered" id= "" style="text-align:center">
      <thead>
         <tr>
            <th style="text-align:left"><strong>VIVE CON:</strong> 
            </th>
            <th>
               {{ $alumno->vive_con }}
            </th>
            <th style="text-align:left"><strong>ANEXA CARTA COMPROMISO</strong>  
            </th>
            <th>
               {{$alumno->carta_compro }}
            </th>
            <th style="text-align:left"><strong>RENDIMIENTO</strong>  
            </th>
            <th>
               {{$alumno->rendimiento}}
            </th>
         </tr>
         <tr>
            <th style="text-align:left"><strong>NUEVO INGRESO</strong>  
            </th>
            <th>
               {{$alumno->nuevo_in}}
            </th>
            <th style="text-align:left"><strong>ESCUELA DE PROCEDENCIA</strong>  
            </th>
            <th>
               {{$alumno->esc_procedencia }}
            </th>
            <th style="text-align:left"><strong>NUNICIPIO DE PROCEDENCIA </strong>  
            </th>
            <th>
               {{$alumno->municipio }}
            </th>
         </tr>
      </thead>
   </table>
   <br>
</div>
<br/>
<div class="form-group text-center" >
   <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
</div>
</div>
@endsection