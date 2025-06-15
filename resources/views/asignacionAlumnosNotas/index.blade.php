@extends ('layouts.app')
@section('content')
<?php $Y= date("Y");
   $Y2=$Y+'1';
   $Y3=$Y-'1';
   ?>
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
   <div class="container col-sm-12">
   <div class="container col-sm-3">
   @if ($asig_alumno !== null)
   <a href="{{route('asignacionAlumnosNotas.create')}}" class="btn btn-success">
   <i class="glyphicon glyphicon-plus"> Asignacn. Nuevo Ingreso</i>
   </a><br><br>
   @endif   
</div>
   <div class ="col-sm-3 inline">         
      <form class="calc_apro_repro">
         @if ($grado_actual !== null || $asig_alumno !== null)
         <button class="btn btn-primary" type="submit" name="button">Calcular Aprobados
         </button>
         @endif
         <br><br>
      </form>
   </div>
   {!! Form::open(['route'=>'asignacionAlumnosNotas.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
   <div class="input-group"> 
      {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
   </div>
   <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
   {!! Form::close()!!}
   </div>
   <h4>Seleccione la pestaña adecuada para gestionar las asignaciones de alumnos.</h4>
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
      <li><a data-toggle="tab" href="#menu">Reasignaciones Aprobados {{$Y3}}</a></li>
      <li><a data-toggle="tab" href="#menu1">Reasignaciones Reprobados {{$Y3}}</a></li>
      <li><a data-toggle="tab" href="#menu2">Todas las Asignaciones.</a></li>
   </ul>
   <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
         <div>
            <div class="tab-content">
               <div class="table-responsive " name="id_docente">
                  <table class="table table-striped" style="text-align:center" >
                     <thead>
                        <tr>
                           <th with="80px">No</th>
                           <th style="text-align:center">Alumno</th>
                           <th style="text-align:center">Docente</th>
                           <th style="text-align:center">Grado</th>
                           <th style="text-align:center">Año</th>
                           <th style="text-align:center">Estado academico {{$Y}}</th>
                           <th style="text-align:center">Acciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if($asig_alumno !== null)
                        <?php $no=1; ?>
                        @foreach ($asig_alumno as $key => $asignacion_alumno)
                        <tr>
                           <td>
                             {{$no++}}
                           </td>
                           <td>
                              {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                           </td>
                           <td>
                              {{ $asignacion_alumno->asignaciones->docentes->User->name  }}
                           </td>
                           <td>
                              {{ $asignacion_alumno->asignaciones->Grados->nombre }} {{ $asignacion_alumno->asignaciones->Grados->seccion }}
                           </td>
                           <td>
                              {{ $asignacion_alumno->anio }} 
                           </td>
                           <td>
                              {{ $asignacion_alumno->estado_academico }} 
                           </td>
                           <td>
                              <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" 
                                 href="{{route('asignacionAlumnosNotas.show',$asignacion_alumno->id)}}">
                              <i class="glyphicon glyphicon-list-alt"></i></a>
                              <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" 
                                 href="{{route('asignacionAlumnosNotas.edit',$asignacion_alumno->id)}}">
                              <i class="glyphicon glyphicon-pencil"></i></a>
                              {!! Form::open(['method' => 'DELETE','route' => ['asignacionAlumnosNotas.destroy', $asignacion_alumno->id],'style'=>'display:inline']) !!}
                              <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
                              {!! Form::close() !!}<br>
                           </td>
                        </tr>
                        @endforeach
                        @endif
                        @if ($asig_alumno == null)
                        <tr>
                           <td>
                              1
                           </td>
                           <td>
                              No hay alumnos año {{$Y}}
                           </td>
                           <td>
                              No hay asignaciones el año {{$Y}}
                           </td>
                           <td>
                              Ingrese asignaciones Alumnos
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                        </tr>
                        @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div id="menu" class="tab-pane fade ">
         <div>
            <div class="tab-content">
               <div class="table-responsive " name="id_docente">
                  <table class="table table-striped" style="text-align:center" >
                     <thead>
                        <tr>
                           <th with="80px">No</th>
                           <th style="text-align:center">Alumno</th>
                           <th style="text-align:center">Docente</th>
                           <th style="text-align:center">Grado</th>
                           <th style="text-align:center">Año</th>
                           <th style="text-align:center">Estado academico {{$Y3}}</th>
                           <th style="text-align:center">Acciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if($grado_anterior !== null)
                        <?php $no=1; ?>
                        @foreach($grado_anterior as $key => $g_an)
                        @php ($asignacion_anterior = $asignaciones->where('id_grado', $g_an->id)->where('anio', $Y3 ))
                        @foreach($asignacion_anterior as $key => $as_an)
                        @php ($asignacionAl_anterior = $asignacionAl->where('id_asignacion', $as_an->id)->where('estado_academico', 'Aprobado'))
                        @foreach($asignacionAl_anterior as $key => $asAl_an)
                        <tr>
                           <td>
                              {{$no++}}
                           </td>
                           <td>
                              {{ $asAl_an->alumno->nombres .' '. $asAl_an->alumno->apellidos  }}
                           </td>
                           <td>
                              {{ $asAl_an->asignaciones->docentes->User->name  }}
                           </td>
                           <td>
                              {{ $asAl_an->asignaciones->Grados->nombre }} {{ $asAl_an->asignaciones->Grados->seccion }}
                           </td>
                           <td>
                              {{ $asAl_an->anio }} 
                           </td>
                           <td>
                              {{ $asAl_an->estado_academico }} 
                           </td>
                           <td>
                              <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" 
                                 href="{{route('asignacionAlumnosNotas.show',$asAl_an->id)}}">
                              <i class="glyphicon glyphicon-list-alt"></i></a>
                              {!! Form::open(['method' => 'GET','route' => ['asignacionAlumnosNotas.reasignar', $asAl_an->id],'style'=>'display:inline']) !!}
                              <button type="submit" data-toggle="tooltip" data-placement="top" title="Re-Inscribir" style="display: inline;" class="btn btn-primary"><i class="glyphicon glyphicon-repeat" ></i></button>
                              {!! Form::close() !!}                             
                              <br>
                           </td>
                        </tr>
                        @endforeach
                        @endforeach
                        @endforeach
                        @endif
                        @if ($grado_anterior == null)
                        <tr>
                           <td>
                              1
                           </td>
                           <td>
                              No hay alumnos Anteriores
                           </td>
                           <td>
                              No hay Docentes Anteriores
                           </td>
                           <td>
                              No hay Grados Anteriores
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                        </tr>
                        @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div id="menu1" class="tab-pane fade ">
         <div>
            <div class="tab-content">
               <div class="table-responsive " name="id_docente">
                  <table class="table table-striped" style="text-align:center" >
                     <thead>
                        <tr>
                           <th with="80px">No</th>
                           <th style="text-align:center">Alumno</th>
                           <th style="text-align:center">Docente</th>
                           <th style="text-align:center">Grado</th>
                           <th style="text-align:center">Año</th>
                           <th style="text-align:center">Estado academico {{$Y3}}</th>
                           <th style="text-align:center">Acciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if($mismo_grado_año_anterior !== null)
                        <?php $no=1; ?>
                        @foreach($mismo_grado_año_anterior as $key => $g_an)
                        @php ($asignacion_anterior = $asignaciones->where('id_grado', $g_an->id)->where('anio', $Y3 ))
                        @foreach($asignacion_anterior as $key => $as_an)
                        @php ($asignacionAl_anterior = $asignacionAl->where('id_asignacion', $as_an->id)->where('estado_academico', 'Reprobado'))
                        @foreach($asignacionAl_anterior as $key => $asAl_an)
                        <tr>
                           <td>
                              {{$no++}}
                           </td>
                           <td>
                              {{ $asAl_an->alumno->nombres .' '. $asAl_an->alumno->apellidos  }}
                           </td>
                           <td>
                              {{ $asAl_an->asignaciones->docentes->User->name  }}
                           </td>
                           <td>
                              {{ $asAl_an->asignaciones->Grados->nombre }} {{ $asAl_an->asignaciones->Grados->seccion }}
                           </td>
                           <td>
                              {{ $asAl_an->anio }} 
                           </td>
                           <td>
                              {{ $asAl_an->estado_academico }} 
                           </td>
                           <td>
                              <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" 
                                 href="{{route('asignacionAlumnosNotas.show',$asAl_an->id)}}">
                              <i class="glyphicon glyphicon-list-alt"></i></a>

                              {!! Form::open(['method' => 'GET','route' => ['asignacionAlumnosNotas.reasignar', $asAl_an->id],'style'=>'display:inline']) !!}
                              <button type="submit" data-toggle="tooltip" data-placement="top" title="Re-Inscribir" style="display: inline;" class="btn btn-primary"><i class="glyphicon glyphicon-repeat" ></i></button>
                              {!! Form::close() !!}
                              <br>
                           </td>
                        </tr>
                        @endforeach
                        @endforeach
                        @endforeach
                        @endif
                        @if ($mismo_grado_año_anterior == null)
                        <tr>
                           <td>
                              1
                           </td>
                           <td>
                              No hay alumnos Anteriores
                           </td>
                           <td>
                              No hay Docentes Anteriores
                           </td>
                           <td>
                              No hay Grados Anteriores
                           </td>
                           <td>
                           </td>
                           <td>
                           </td>
                        </tr>
                        @endif
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div id="menu2" class="tab-pane fade">
         <table class="table table-striped" style="text-align:center" >
            <tr>
               <th with="80px">No</th>
               <th style="text-align:center">Alumno</th>
               <th style="text-align:center">Grado</th>
               <th style="text-align:center">Docente</th>
               <th style="text-align:center">Año</th>
               <th style="text-align:center">Estado academico</th>
               <th style="text-align:center">Acciones</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($asignacionAlumnosNotas as $key => $value)
            <tr>
               <td>{{$no++}}</td>
               <td>{{ $value->Alumnos->nombres }} {{ $value->Alumnos->apellidos }}<br></td>
               <td>{{$value->Asignaciones->Grados->nombre }} {{ $value->Asignaciones->Grados->seccion }}</td>
               <td>{{$value->Asignaciones->Docentes->User->name }}</td>
               <td>{{$value->anio}}<br></td>
               <td>
                  {{$value->estado_academico}} 
               </td>
               <td>
                  <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('asignacionAlumnosNotas.show',$value->id)}}">
                  <i class="glyphicon glyphicon-list-alt"></i></a>
                  <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('asignacionAlumnosNotas.edit',$value->id)}}">
                  <i class="glyphicon glyphicon-pencil"></i></a>
                  {!! Form::open(['method' => 'DELETE','route' => ['asignacionAlumnosNotas.destroy', $value->id],'style'=>'display:inline']) !!}
                  <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
                  {!! Form::close() !!}<br>
               </td>
            </tr>
            @endforeach
         </table>
         <h4>Paginacion de Todas las asignaciones</h4>
         {!!$asignacionAlumnosNotas->render()!!}
      </div>
   </div>
   
   <div class="text-center">
      <a href="{{ url('/gestion') }}" class="btn btn-primary">
      <i class="glyphicon glyphicon-arrow-left"> CANCELAR</i>
      </a>
   </div>
</div>
<script >
   $('.calc_apro_repro').submit(function( event ) {
     event.preventDefault();
       window.location.href = "/asignacionAlumnosNotas/aprobar/reprobar";
   }
                            );
</script>
@endsection