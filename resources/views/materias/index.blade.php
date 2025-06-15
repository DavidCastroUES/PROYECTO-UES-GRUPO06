@extends ('layouts.app')
@section('content')
<div class="row">
   <div class ="col-sm-12">
      <div class="full.right">
         <h2>GESTION DE MATERIA</h2>
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
<a href="{{route('materias.create')}}" class="btn btn-success">
<i class="glyphicon glyphicon-plus"> NUEVO</i>
</a>
{!! Form::open(['route'=>'materias.index', 'method'=>'GET', 'class'=>'navbar-form pull-right', 'role'=>'search'])!!}
<div class="input-group"> 
   {!! Form::text('id_materia', null, ['class'=>'form-control', 'placeholder'=>'Buscar'])!!}
</div>
<button type="submit" class="glyphicon glyphicon-search btn-sm" data-toggle="tooltip" data-placement="top" title="Buscar"></button>
{!! Form::close()!!}
<table class="table table-striped" style="text-align:center" >
   <tr>
      <th with="80px" style="text-align: center">No</th>
      <th  style="text-align: center">Nombre</th>
      <th  style="text-align: center">Accion</th>
   </tr>
   <?php $no=1; ?>
   @foreach ($materias as $key => $value)
   <tr>
      <td>{{$no++}}</td>
      <td>{{ $value->nombre }}</td>
      <td>
         <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detalles" href="{{route('materias.show',$value->id)}}">
         <i class="glyphicon glyphicon-list-alt"></i></a>
         <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" href="{{route('materias.edit',$value->id)}}">
         <i class="glyphicon glyphicon-pencil"></i></a>
         {!! Form::open(['method' => 'DELETE','route' => ['materias.destroy', $value->id],'style'=>'display:inline']) !!}
         <button type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="display: inline;" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminar este Registro?')"><i class="glyphicon glyphicon-trash" ></i></button>
         {!! Form::close() !!}
      </td>
   </tr>
   @endforeach
</table>
{!!$materias->render()!!}
<div class="text-center">
   <a href="{{ url('/gestion') }}" class="btn btn-primary">
   <i class="glyphicon glyphicon-arrow-left"> CANCELAR</i>
   </a>
</div>
@endsection