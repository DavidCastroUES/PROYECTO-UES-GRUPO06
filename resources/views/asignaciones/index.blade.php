@extends ('layouts.app')
@section('content')
<div class="row">
   <?php $Y= date("Y");
         $Y2=$Y+'1';
         ?>
   <div class ="col-sm-12">
      <div class="full.right">
         <h2>Gestion de Asignacion Docente-Grado {{$Y}}</h2>
         <br>
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
   <a href="{{route('asignaciones.create')}}" class="btn btn-success">
   <i class="glyphicon glyphicon-plus"> NUEVO</i>
   </a>
   {!! Form::open(['route'=>'asignaciones.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
   <div class="input-group"> 
      {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
   </div>
   <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
   {!! Form::close()!!}
</div>
<br>

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#actual">Asignaciones año {{$Y}}</a></li>
    <li><a data-toggle="tab" href="#todas">Todas las asignaciones</a></li>
  </ul>
  <div class="tab-content">
<div id="actual" class="tab-pane fade in active">
<table class="table table-striped" style="text-align:center" >
   <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Docente</th>
      <th style="text-align:center">Grado</th>
      <th style="text-align:center">Año</th>
      <th style="text-align:center">Acciones</th>
   </tr>
   <?php $no=1; ?>
   @foreach ($asignacion as $key => $value)
   <tr>
      <td>{{$no++}}</td>
      <td>{{$value->Docentes->User->name }}</td>
      <td>{{$value->Grados->nombre}} {{ $value->Grados->seccion }}</td>
      <td>{{ $value->anio }}<br></td>
      <td>
         <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('asignaciones.show',$value->id)}}">
         <i class="glyphicon glyphicon-list-alt"></i></a>
         <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('asignaciones.edit',$value->id)}}">
         <i class="glyphicon glyphicon-pencil"></i></a>
         {!! Form::open(['method' => 'DELETE','route' => ['asignaciones.destroy', $value->id],'style'=>'display:inline']) !!}
         <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
         {!! Form::close() !!}<br>
      </td>
   </tr>
   @endforeach
</table>
</div>
<div id="todas" class="tab-pane fade">
<table class="table table-striped" style="text-align:center" >
   <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Docente</th>
      <th style="text-align:center">Grado</th>
      <th style="text-align:center">Año</th>
      <th style="text-align:center">Acciones</th>
   </tr>
   <?php $no=1; ?>
   @foreach ($asignaciones as $key => $value)
   <tr>
      <td>{{$no++}}</td>
      <td>{{$value->Docentes->User->name }}</td>
      <td>{{$value->Grados->nombre}} {{ $value->Grados->seccion }}</td>
      <td>{{ $value->anio }}<br></td>
      <td>
         <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('asignaciones.show',$value->id)}}">
         <i class="glyphicon glyphicon-list-alt"></i></a>
         <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('asignaciones.edit',$value->id)}}">
         <i class="glyphicon glyphicon-pencil"></i></a>
         {!! Form::open(['method' => 'DELETE','route' => ['asignaciones.destroy', $value->id],'style'=>'display:inline']) !!}
         <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
         {!! Form::close() !!}<br>
      </td>
   </tr>
   @endforeach
</table>
</div>
</div>
{!!$asignaciones->render()!!}
<div class="text-center">
   <a href="{{ url('/gestion') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-arrow-left"> CANCELAR</i>
   </a>
</div>
@endsection