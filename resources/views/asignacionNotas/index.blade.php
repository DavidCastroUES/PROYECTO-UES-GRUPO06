@extends ('layouts.app')
@section('content')
<div class="row">
      <div class ="col-sm-12">
         <div class="full.right">
         @if($grado_actual == null || $asig_alumno == null)
         <h2>Reportes de Notas, año {{$Y}}.</h2>
         @endif
         @if ($grado_actual !== null || $asig_alumno !== null)
         <h2>Reportes de Notas, año {{$Y}}, {{$grado_actual->nombre}} {{$grado_actual->seccion}}</h2>
         <h3>A continuacion se presentan los Reportes por Trimestre, y el Reporte Final.</h3>
         <br>
         <H4>Seleccione una opcion para consultar el Reporte de Notas de cada Alumno.</H4><br>
         @endif
         @if ($grado_actual == null)
         <h3>Usted no tiene un grado asignado para el año {{$Y}}. </h3>
         <h4>Para poder gestionar sus alumnos, solicite un Grado al administrador</h4>
         @endif
         @if ($asig_alumno == [])
         <h3>Usted no tiene Alumnos en su grado para el año {{$Y}}. </h3>
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
   <div class="table-responsive">
  <table class="table table-striped" style="text-align:center; width: 900px" >
    <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Alumnos</th>
      <th style="text-align:center">Ver Reporte Trimestre 1</th>
      <th style="text-align:center">Ver Reporte Trimestre 2</th>
      <th style="text-align:center">Ver Reporte Trimestre 3</th>
      <th style="text-align:center">Ver Reporte Final</th>
    </tr>
    <?php $no=1;?>
    @if($grado_actual !== null || $asig_alumno !== null)
    @foreach ($asig_alumno as $key => $asignacion_alumno)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}</td>
        <!--@foreach($materias as $key => $materia)
        @php ($notasAsignada1 = $asignacion_alumno->AsignacionNotas->where('id_materia', $materia->id )->where('id_trimestre', 1 )->first())
        <td>{{ is_null($notasAsignada1) ? '0' : $notasAsignada1->ActividadIntegradora->first()->promedio_i }}</td>
        @endforeach  --> 
        <td>
              {!! Form::open(['method' => 'GET','route' => ['asignacionNotas.reporte1', $asignacion_alumno->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Reporte Trimestre 1" style="display: inline;" class="btn btn-success"><i class="glyphicon glyphicon-list-alt" ></i></button>
              {!! Form::close() !!}
        </td>
        <td>
              {!! Form::open(['method' => 'GET','route' => ['asignacionNotas.reporte2', $asignacion_alumno->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Reporte Trimestre 2" style="display: inline;" class="btn btn-warning"><i class="glyphicon glyphicon-list-alt" ></i></button>
              {!! Form::close() !!}
        </td>
        <td>
              {!! Form::open(['method' => 'GET','route' => ['asignacionNotas.reporte3', $asignacion_alumno->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Reporte Trimestre 3" style="display: inline;" class="btn btn-info"><i class="glyphicon glyphicon-list-alt" ></i></button>
              {!! Form::close() !!}
        </td>
        <td>
              {!! Form::open(['method' => 'GET','route' => ['asignacionNotas.reporte123', $asignacion_alumno->id],'style'=>'display:inline']) !!}
              <button type="submit" data-toggle="tooltip" data-placement="top" title="Reporte Final" style="display: inline;" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt" ></i></button>
              {!! Form::close() !!}
            {!! Form::close() !!}<br>
        
        </td>
      </tr>
    @endforeach
    @endif

  </table>
  </div>
 <div class="text-center">
    <a class="btn btn-primary" href="{{ url('/gestion') }}">Regresar</a>
  </div>
@endsection
