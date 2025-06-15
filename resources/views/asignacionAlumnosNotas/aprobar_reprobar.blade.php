@extends ('layouts.app')
@section('content')
<?php $Y= date("Y");
   $Y2=$Y+'1';
   $Y3=$Y-'1';
   ?>
<style>
  .form-control {
    width: 75px ;
    text-align:center;
  }
</style>
<div class="row">
   <div class ="col-sm-12">
      <div class="full.right">
         @if ($grado_actual == null)
         <h2>Gestion de Asignacion: Alumno-Grado, año {{$Y}}.</h2>
         <h3>Usted no tiene un grado asignado para el año {{$Y}}. </h3>
         <h4>Para poder gestionar sus alumnos, solicite un Grado al administrador</h4>
         @endif
         @if ($grado_actual !== null)
         <h2>Gestion de Asignacion: Alumno-Grado, año {{$Y}}, {{$grado_actual->nombre}} {{$grado_actual->seccion}}</h2>
         <br>
         @endif
      </div>
   </div>
</div>
@if ($message = Session::get('success')) 
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger">
   <p>{{ $message }}</p>
</div>
@endif
<div>
</div>
<br>

<div class="container">
   <ul class="nav nav-tabs">
      @if ($grado_actual == null)
      <li class="active"><a data-toggle="tab" href="#home">Mis Asigns. Año {{$Y}}</a></li>
      @endif
      @if($grado_actual !== null)
      <li class="active"><a data-toggle="tab" href="#home">Mis Asigns. Año {{$Y}} {{$grado_actual->nombre}} {{$grado_actual->seccion}}</a></li>
      @endif
   </ul>
   <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
         <ul class="nav nav-tabs" role="tablist">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <li role="presentation" class=" {{ $indice === 0 ? 'active' : ''}}"><a href="#mat_{{ $materia->id }}" aria-controls="#mat_{{ $materia->id }}" role="tab" data-toggle="tab">{{ $materia->nombre }}</a></li>
         @php($indice++) 
         @endforeach
      </ul>
      <div class="tab-content">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <div role="tabpanel" class="tab-pane {{ $indice === 0 ? 'active' : ''}}" id="mat_{{ $materia->id }}">
            {!! Form::open(['method' => 'asignacionAlumnosNotas.calc_aprobacion', 'method'=>'POST', 'id', 'trimestre' => 'notasForm'])!!}
            <div class="table-responsive ">
               <table class="table table-striped " id= "{{ $materia->nombre }}" style="text-align:center; width: 75px" >
                  <thead>
                     <tr>
                        <th with="80px">No
                        </th>
                        <th style="text-align:center">Nombre Alumno
                        </th>
                        <th style="text-align:center">Promedio Trimestre 1
                        </th>
                        <th style="text-align:center">Promedio Trimestre 2
                        </th>
                        <th style="text-align:center">Promedio Trimestre 3
                        </th>
                        <th style="text-align:center">Promedio Final
                        </th>

                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($asig_alumno as $key => $asignacion_alumno)
                     <tr>
                        <td>
                           {{ $key+1 }}
                        </td>
                        <td>
                           @foreach ($asignacionNotas as $key2 => $asignacionNota)
                           <input  required type="hidden" name="notas[asignacion][{{ $key2  }}][id_materia]" value="{{ $materia->id }}">
                           <input  required type="hidden" name="notas[asignacion][{{ $key2  }}][id_materia]" value="{{ $ids }}">
                           @endforeach
                           @php ($notasAsignada1 = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 1 )->first())
                           @php ($notasAsignada2 = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 2 )->first())
                           @php ($notasAsignada3 = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 3 )->first())
                           @php ($notasAsignada4 = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 4 )->first())
                           
                           {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                        </td>

                        <td>
                        <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada1) ? '0' : $notasAsignada1->nota_trimestral }}" onchange="Calcular_Prom({{ $key }})" class="prom_porcent {{$key}}_prom_porcent form-control required" name="notas[integradora][{{ $key  }}][prom_i_porcent]">
                        </td>
                        <td>
                           <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada2) ? '0' : $notasAsignada2->nota_trimestral }}" onchange="Calcular_Prom({{ $key }})" class="coti_porcent {{$key}}_coti_porcent form-control required" name="notas[cotidiana][{{ $key  }}][nota_porcent]">
                        </td>
                        <td>
                        <input  required  readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada3) ? '0' : $notasAsignada3->nota_trimestral }}" onchange="Calcular_Prom({{ $key }})" class="prueba_porcent {{$key}}_prueba_porcent form-control required" name="notas[pruebas][{{ $key  }}][prom_p_porcent]">
                      </td>
                      <td>
                        {{-- {{$asignacion_alumno}} --}}
                        <input  required  readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada4) ? '0' : $notasAsignada4->nota_trimestral }}" onchange="Calcular_Prom({{ $key }})" class="prueba_porcent {{$key}}_prueba_porcent form-control required" name="notas[pruebas][{{ $key  }}][prom_p_porcent]">
                      </td>           
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         @php($indice++) 
         @endforeach
      </div>
      </div>
   </div>
   
   <div class="text-center">
      <a href="{{ url('/gestion') }}" class="btn btn-primary">
      <i class="glyphicon glyphicon-arrow-left"> CANCELAR</i>
      </a>
   </div>
</div>
{!! Form::close()!!}
 <script>
  $('#notasForm').submit(function(event) {

  });
$('#notasForm').validate()
 function Calcular_Prom(idx) {
 var vr1 = $(`.${idx}_prom_porcent`).val();
 var vr2 = $(`.${idx}_coti_porcent`).val();
 var vr3 = $(`.${idx}_prueba_porcent`).val();
 var p4 = (parseFloat(vr1)+parseFloat(vr2)+parseFloat(vr3))/3;
 console.log(p4)
 $(`.${idx}_prom_trimestral`).val( p4.toFixed(2) );
 }

 jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es requerido",
    max: jQuery.validator.format("Por favor ingrese un valor menor o igual a {0}."),
    min: jQuery.validator.format("Por favor ingrese un valor mayor o igual a {0}.")
});

</script>
@endsection