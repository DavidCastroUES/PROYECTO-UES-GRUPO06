@extends ('layouts.app')
@section('content')
<div class="row">
   <div class ="col-sm-12">
      <div class="full.right">
         <h2>GESTION DE ALUMNOS</h2>
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
   <a href="{{route('alumnos.create')}}" class="btn btn-success ">
   <i class="glyphicon glyphicon-plus"> NUEVO</i>
   </a>
   {!! Form::open(['route'=>'alumnos.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
   <div class="input-group"> 
      {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
   </div>
   <button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
   {!! Form::close()!!}
</div>
<br>
<div class="table-responsive ">
<table class="table table-striped" style="text-align:center" >
   <tr>
      <th with="80px">No</th>
      <th style="text-align:center">Nombres, Apellidos</th>
      <th style="text-align:center">NIE</th>
      <th style="text-align:center">Fecha Nacimiento</th>
      <th style="text-align:center">Edad</th>
      <th style="text-align:center">Estudio Parvularia</th>
      <th style="text-align:center">Padece Enfermedad</th>
      <th style="text-align:center">Nombre Madre</th>
      <th style="text-align:center">Nombre Padre</th>
      <th style="text-align:center">Opciones</th>
   </tr>
   <?php $no=1; ?>
   @foreach ($alumnos as $key => $value)
   <tr>
      <td>{{$no++}}</td>
      <td>{{ $value->nombres }} {{ $value->apellidos }}</td>
      <td>{{ $value->no_nie }}</td>
      <td>{{ $value->f_nacimiento }}</td>
      <td><?php
         $cumpleanos = new DateTime($value->f_nacimiento);
         $hoy = new DateTime();
         $annos = $hoy->diff($cumpleanos);
         echo $annos->y;
         ?></td>
         <td>{{ $value->parvularia }}</td>
         <td>{{ $value->enfermedad }}</td>
         <td>{{ $value->nombre_madre }}</td>
         <td>{{ $value->nombre_padre }}</td>
      <td>
         <a class="btn btn-info " data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('alumnos.show',$value->id)}}">
         <i class="glyphicon glyphicon-list-alt"></i></a>
         <a class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('alumnos.edit',$value->id)}}">
         <i class="glyphicon glyphicon-pencil"></i></a>
         {!! Form::open(['method' => 'DELETE','route' => ['alumnos.destroy', $value->id],'style'=>'display:inline']) !!}
         <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger " onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
         {!! Form::close() !!}
      </td>
   </tr>
   @endforeach
</table>
</div>
{!!$alumnos->render()!!}
<div class="text-center">
   <a href="{{ url('/gestion') }}" class="btn btn-primary ">
   <i class="glyphicon glyphicon-arrow-left"> CANCELAR</i>
   </a>
</div>
@endsection