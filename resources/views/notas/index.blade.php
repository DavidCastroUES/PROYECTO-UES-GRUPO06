@extends ('layouts.app')
@section('content')
<div class="row">
   <div class="row">
      <div class ="col-sm-12">
         <div class="full.right">
         @if($grado_actual == null || $asig_alumno == null)
         <h2>Gestion de Asignacion de Notas, año {{$year}}.</h2>
         @endif
         @if ($grado_actual !== null || $asig_alumno !== null)
         <h2>Gestion de Asignacion de Notas, año {{$year}}, {{$grado_actual->nombre}} {{$grado_actual->seccion}}</h2>
         <br>
         @endif
         @if ($grado_actual == null)
         <h3>Usted no tiene un grado asignado para el año {{$year}}. </h3>
         <h4>Para poder gestionar sus alumnos, solicite un Grado al administrador</h4>
         @endif
         @if ($asig_alumno == [])
         <h3>Usted no tiene Alumnos en su grado para el año {{$year}}. </h3>
         <h4>Inscriba alumnos en el menu asignacion Alumnos-Grado</h4>
         <br>
         @endif

         </div>
         @if ($message = Session::get('success'))
         <div class="alert alert-success">
            <p>{{ $message }}
            </p>
         </div>
         @endif
      </div>
   </div>

   <div class ="col-sm-12">
      <div class ="col-sm-5"><!-- Boton de seleccion de materia y Trimestre -->
         <form class="select_materia_trimestre">
            <h4>Seleccione Materia y Trimestre e Ingrese Notas</h4>
            <select required name="id_materia" id='id_materia' class="form-control">
               <option disabled selected>Seleccione la materia
               </option>
               @foreach($materias as $materia)
               <option value="{{$materia->id}}">{{$materia->nombre}}
               </option>
               @endforeach
            </select>
            <br>
            <select required name="trimestre" id='trimestre' class="form-control">
               <option disabled selected>Seleccione el Trimestre del año {{$year}}</option>
               <option value=1>Primer Trimestre</option>
               <option value=2>Segundo Trimestre</option>
               <option value=3>Tercer Trimestre</option>
            </select>
            <br>
            @if ($grado_actual !== null || $asig_alumno !== null)
            <button class="btn btn-success" type="submit" name="button">Ingresar Notas por Materia
            </button>
            @endif
            <br><br>
         </form>
      </div>
      <div class ="col-sm-5"><!-- Boton de seleccion de Trimestre para Conductas-->
         <form class="select_conducta_trimestre">
            <h4>Seleccione Trimestre a ingresar Notas de Conducta</h4>
            <select required name="trim" id='trim' class="form-control">
               <option disabled selected>Seleccione el Trimestre del año {{$year}}</option>
               <option value=1> Primer Trimestre</option>
               <option value=2> Segundo Trimestre</option>
               <option value=3> Tercer Trimestre</option>
            </select>
            <br>
            @if ($grado_actual !== null || $asig_alumno !== null)
            <button class="btn btn-success" type="submit" name="button">Ingresar Notas de Conducta
            </button>
            @endif
            <br><br>
         </form>
      </div>
   </div>

   <H4>Seleccione una Materia para consultar las Notas de los Alumnos</H4>
      <ul class="nav nav-tabs">
         <li class="active"><a data-toggle="tab" href="#resumen">Promedios</a></li>
         <li><a data-toggle="tab" href="#trim_1">Detalle Trimestre 1.</a></li>
         <li><a data-toggle="tab" href="#trim_2">Detalle Trimestre 2.</a></li>
         <li><a data-toggle="tab" href="#trim_3">Detalle Trimestre 3.</a></li>
         <li><a data-toggle="tab" href="#resumen_conducta">Detalle Conducta.</a></li>
         <li>      
            <form class="calc_apro_repro">
               @if ($grado_actual !== null || $asig_alumno !== null)
               <div class ="col-sm-5 inline">
                  <h5>Promedios finales, Aprobar/Reprobar:</h5>
               </div>
                  <button class="btn btn-primary" type="submit" name="button">Calcular Promedios
               </button>
               @endif
               <br><br>
            </form>
         </li>
      </ul>
   @if($asig_alumno !== null)
   <div class="tab-content">
   <div id="trim_1" class="tab-pane fade"><!-- Tabla para Primer Trimestre -->
      <ul class="nav nav-tabs" role="tablist">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <li role="presentation" class=" {{ $indice === 0 ? 'active' : ''}}"><a href="#materia_{{ $materia->id }}" aria-controls="#materia_{{ $materia->id }}" role="tab" data-toggle="tab">{{ $materia->nombre }}</a></li>
         @php($indice++) 
         @endforeach
      </ul>
      <div class="tab-content">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <div role="tabpanel" class="tab-pane {{ $indice === 0 ? 'active' : ''}}" id="materia_{{ $materia->id }}">
            <div class="table-responsive ">
               <table class="table table-striped" id= "{{ $materia->nombre }}" style="text-align:center" >
                  <thead>
                     <tr>
                        <th with="80px">No
                        </th>
                        <th style="text-align:center">Alumno
                        </th>
                        <th style="text-align:center">Act. Integradora 1
                        </th>
                        <th style="text-align:center">Act. Integradora 2
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">35% Integradora
                        </th>
                        <th style="text-align:center">Act. Cotidiana
                        </th>
                        <th style="text-align:center">35% Cotidiana
                        </th>
                        <th style="text-align:center">Laboratorio
                        </th>
                        <th style="text-align:center">Examen
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">30% Pruebas
                        </th>
                        <th style="text-align:center">Promedio Trimestral
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
                           @foreach ($asignacionNotas as $key => $asignacionNota)
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $materia->id }}">
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $ids }}">
                           @endforeach
                           @php ($notasAsignada = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 1 )->first())
                           {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_1  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_2  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->promedio_i }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->prom_i_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_cotidiana  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->laboratorio }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->examen }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->promedio_p }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->prom_p_porcent }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->nota_trimestral }}
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
   <div id="trim_2" class="tab-pane fade"><!-- Tabla para Segundo Trimestre -->
      <ul class="nav nav-tabs" role="tablist">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <li role="presentation" class=" {{ $indice === 0 ? 'active' : ''}}"><a href="#materi_{{ $materia->id }}" aria-controls="#materi_{{ $materia->id }}" role="tab" data-toggle="tab">{{ $materia->nombre }}</a></li>
         @php($indice++) 
         @endforeach
      </ul>
      <div class="tab-content">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <div role="tabpanel" class="tab-pane {{ $indice === 0 ? 'active' : ''}}" id="materi_{{ $materia->id }}">
            <div class="table-responsive ">
               <table class="table table-striped" id= "{{ $materia->nombre }}" style="text-align:center" >
                  <thead>
                     <tr>
                        <th with="80px">No
                        </th>
                        <th style="text-align:center">Alumno
                        </th>
                        <th style="text-align:center">Act. Integradora 1
                        </th>
                        <th style="text-align:center">Act. Integradora 2
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">35% Integradora
                        </th>
                        <th style="text-align:center">Act. Cotidiana
                        </th>
                        <th style="text-align:center">35% Cotidiana
                        </th>
                        <th style="text-align:center">Laboratorio
                        </th>
                        <th style="text-align:center">Examen
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">30% Pruebas
                        </th>
                        <th style="text-align:center">Promedio Trimestral
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
                           @foreach ($asignacionNotas as $key => $asignacionNota)
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $materia->id }}">
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $ids }}">
                           @endforeach
                           @php ($notasAsignada = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 2 )->first())
                           {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_1  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_2  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->promedio_i }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->prom_i_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_cotidiana  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->laboratorio }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->examen }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->promedio_p }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->prom_p_porcent }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->nota_trimestral }}
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
   <div id="trim_3" class="tab-pane fade"><!-- Tabla para Tercer Trimestre -->
      <ul class="nav nav-tabs" role="tablist">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <li role="presentation" class=" {{ $indice === 0 ? 'active' : ''}}"><a href="#mater_{{ $materia->id }}" aria-controls="#mater_{{ $materia->id }}" role="tab" data-toggle="tab">{{ $materia->nombre }}</a></li>
         @php($indice++) 
         @endforeach
      </ul>
      <div class="tab-content">
         @php($indice = 0)
         @foreach ($materias as $ids => $materia)
         <div role="tabpanel" class="tab-pane {{ $indice === 0 ? 'active' : ''}}" id="mater_{{ $materia->id }}">
            <div class="table-responsive ">
               <table class="table table-striped" id= "{{ $materia->nombre }}" style="text-align:center" >
                  <thead>
                     <tr>
                        <th with="80px">No
                        </th>
                        <th style="text-align:center">Alumno
                        </th>
                        <th style="text-align:center">Act. Integradora 1
                        </th>
                        <th style="text-align:center">Act. Integradora 2
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">35% Integradora
                        </th>
                        <th style="text-align:center">Act. Cotidiana
                        </th>
                        <th style="text-align:center">35% Cotidiana
                        </th>
                        <th style="text-align:center">Laboratorio
                        </th>
                        <th style="text-align:center">Examen
                        </th>
                        <th style="text-align:center">Promedio
                        </th>
                        <th style="text-align:center">30% Pruebas
                        </th>
                        <th style="text-align:center">Promedio Trimestral
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
                           @foreach ($asignacionNotas as $key => $asignacionNota)
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $materia->id }}">
                           <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $ids }}">
                           @endforeach
                           @php ($notasAsignada = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 3 )->first())
                           {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_1  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_2  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->promedio_i }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->prom_i_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_cotidiana  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_porcent  }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->laboratorio }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->examen }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->promedio_p }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->prom_p_porcent }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada) ? '0' : $notasAsignada->nota_trimestral }}
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
<div id="resumen" class="tab-pane fade in active"><!-- Tabla Resumen de notas por materia para año lectivo --><ul class="nav nav-tabs" role="tablist">
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
            <div class="table-responsive">
               <table class="table table-striped " id= "{{ $materia->nombre }}" style="text-align:center" >
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
                        <th style="text-align:center">Promedio Final {{ $materia->nombre}}, {{$year}}
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
                           {{ is_null($notasAsignada1) ? '0' : $notasAsignada1->nota_trimestral }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada2) ? '0' : $notasAsignada2->nota_trimestral }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada3) ? '0' : $notasAsignada3->nota_trimestral }}
                        </td>
                        <td>
                           {{ is_null($notasAsignada4) ? '0' : $notasAsignada4->nota_trimestral }}
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
<div id="resumen_conducta" class="tab-pane fade"><!-- Tabla Resumen de notas de Conductas para año lectivo -->
      <div >
         <br>
            <div class="table-responsive ">
               <table class="table table-condensed table-striped" id= "tabla_conductas" style="text-align:center" >
                  <thead>
                     <tr>
                        <th with="80px">No
                        </th>
                        <th style="text-align:center">Nombre Alumno
                        </th>
                        <th style="text-align:center">Moral y Civica Trim 1
                        </th>
                        <th style="text-align:center">Conducta Trim 1
                        </th>
                        <th style="text-align:center">observaciones Trim 1
                        </th>
                        <th style="text-align:center">Moral y Civica Trim 2
                        </th>
                        <th style="text-align:center">Conducta Trim 2
                        </th>
                        <th style="text-align:center">observaciones Trim 2
                        </th>
                        <th style="text-align:center">Moral y Civica Trim 3
                        </th>
                        <th style="text-align:center">Conducta Trim 3
                        </th>
                        <th style="text-align:center">observaciones Trim 3
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($asig_alumno as $key => $asignacion_alumno)
                     <tr>
                        <td>
                           {{ $key+1 }}
                        </td>
                        <td>@foreach ($asignacionConductas as $key => $conduct)
                           @endforeach
                           @php ($notaCond1 = $asignacion_alumno->asignacionConductas->where('id_trimestre', 1 )->first())
                           @php ($notaCond2 = $asignacion_alumno->asignacionConductas->where('id_trimestre', 2 )->first())
                           @php ($notaCond3 = $asignacion_alumno->asignacionConductas->where('id_trimestre', 3 )->first())
                           {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                           </td>
                         <td>
                           {{ is_null($notaCond1) ? 'No asignada' : $notaCond1->Conductas->first()->moral_civica}}
                        </td>
                        <td>
                           {{ is_null($notaCond1) ? '0' : $notaCond1->Conductas->first()->nota_conducta}}
                        </td>
                        <td>
                           {{ is_null($notaCond1) ? '' : $notaCond1->Conductas->first()->observaciones }}
                        </td>
                        <td>
                           {{ is_null($notaCond2) ? 'No asignada' : $notaCond2->Conductas->first()->moral_civica}}
                        </td>
                        <td>
                           {{ is_null($notaCond2) ? '0' : $notaCond2->Conductas->first()->nota_conducta}}
                        </td>
                        <td>
                           {{ is_null($notaCond2) ? '' : $notaCond2->Conductas->first()->observaciones }}
                        </td>
                        <td>
                           {{ is_null($notaCond3) ? 'No asignada' : $notaCond3->Conductas->first()->moral_civica}}
                        </td>
                        <td>
                           {{ is_null($notaCond3) ? '0' : $notaCond3->Conductas->first()->nota_conducta}}
                        </td>
                        <td>
                           {{ is_null($notaCond3) ? '' : $notaCond3->Conductas->first()->observaciones }}
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
</div>
@endif
</div>  
</div>

<div class="text-center">
   <br>
   <a href="{{ url('/gestion') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-arrow-left"> Cancelar</i>
   </a>
</div>
<script >
   $('.select_materia_trimestre').submit(function( event ) {
     event.preventDefault();
     if ($("#id_materia" ).val() !== null && $("#trimestre" ).val() !== null) {
       window.location.href = "/notas/materia/"+$("#id_materia" ).val()+"/trimestre/"+$("#trimestre" ).val();
     }
   }
                            );
   
   $('.select_materia_trimestre').validate()
   jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es requerido"
   });
</script>
<script >
   $('.select_conducta_trimestre').submit(function( event ) {
     event.preventDefault();
     if ($("#trim" ).val() !== null) {
       window.location.href = "/notas/conducta/trimestre/"+$("#trim").val();
     }
   }
                            );
    $('.select_conducta_trimestre').validate()
   jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es requerido"
   });
</script>
<script >
   $('.calc_apro_repro').submit(function( event ) {
     event.preventDefault();
       window.location.href = "/notas/aprobar/reprobar";
   }
                            );
</script>
@endsection