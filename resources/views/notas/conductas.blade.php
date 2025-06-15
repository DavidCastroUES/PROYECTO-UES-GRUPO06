@extends ('layouts.app')
@section('content')
<style>
  .form-control {
  }
</style>
<div class="row">
   <div class ="col-sm-12">
      <div class="full.right">
         <h2>Asignacion de Notas de Conductas para el {{$trimestres->nombre}} Trimestre </h2>
         <br>
      </div>
   </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
{!! Form::open(['method' => 'notas.cond', $trimestre, 'method'=>'POST', 'id', 'trimestre' => 'conductasForm'])!!}
<input  required type="hidden" name="trimestre" value="{{ $trimestre }}">
<div class="table-responsive">
   <table class="table table-striped" style="text-align:center" >
      <thead>
         <tr>
            <th with="80px">No</th>
            <th style="text-align:center">Alumno</th>
            <!-- {{ $asig_alumno}} -->
            <th style="text-align:center">Moral y Cívica</th>
            <th style="text-align:center">Conducta</th>
            <th style="text-align:center">Observaciones</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($asig_alumno as $key => $asignacion_alumno)
         <tr>
            <td>
               {{ $key+1 }}
            </td>
            <td>
               <input  required type="hidden" name="conductas[asignacion][{{ $key  }}][id_asignacion_alumno]" value="{{ $asignacion_alumno->id }}">
               <input  required type="hidden" name="conductas[asignacion][{{ $key  }}][id_trimestre]" value="{{ $trimestre }}">
               @php ($conductasAsignada = $asignacion_alumno->AsignacionConductas->where('id_trimestre', $trimestre )->first())
               {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
            </td>
            <td>
               <select required type="text" id="moral_civica" class="moral_civica {{$key}}_moral_civica form-control required" name="conductas[conductas][{{ $key  }}][moral_civica]">
                  <option selected value="{{ is_null($conductasAsignada) ? 'Excelente' : $conductasAsignada->Conductas->first()->moral_civica  }}">{{ is_null($conductasAsignada) ? "Excelente" : $conductasAsignada->Conductas->first()->moral_civica  }} </option>
                  <option value="Excelente">Excelente</option>
                  <option value="Muy bueno">Muy bueno</option>
                  <option value="Bueno">Bueno</option>
                  <option value="Regular">Regular</option>
                  <option value="Malo">Malo</option>
                  <option value="Deficiente">Deficiente</option>
               </select>
            </td>
            <td>
               <input  required type="number" min="0" max="10" step="0.01" id="nconducta" value="{{ is_null($conductasAsignada) ? '0' : $conductasAsignada->Conductas->first()->nota_conducta }}" class="nconducta {{$key}}_nconducta form-control required" name="conductas[conductas][{{ $key  }}][nota_conducta]">
            </td>
            <td>
               <textarea id="observacion" rows="2" cols="30" placeholder="Observaciones del alumno, (si las hay)."value="{{ is_null($conductasAsignada) ? '' : $conductasAsignada->Conductas->first()->activi_2  }}" class="observacion {{$key}}_observacion form-control" name="conductas[conductas][{{$key}}][observaciones]">{{is_null($conductasAsignada)? '' : $conductasAsignada->Conductas->first()->observaciones}}</textarea>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
<br>
<div class="text-center">
   @if ($asig_alumno !== null)
   <button class="btn btn-success" type="submit" name="button">Guardar conductas</button>
   @endif
   <a class="btn btn-primary" href="{{ route('notas.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
</div>
{!! Form::close()!!}
@endsection