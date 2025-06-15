@extends ('layouts.app')
@section('content')
<style>
  .form-control {
    width: 75px ;
  }
</style>
  <div class="row">
    <div class ="col-sm-12">
      <div class="full.right">
      <h2>Asignacion de Notas de {{$materias->nombre}} para el {{$trimestres->nombre}} Trimestre </h2>
      <br>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
      {!! Form::open(['method' => 'notas.bulk', $id, $trimestre, 'method'=>'POST', 'id', 'trimestre' => 'notasForm'])!!}
      <input  required type="hidden" name="id_materia" value="{{ $id }}">
      <input  required type="hidden" name="trimestre" value="{{ $trimestre }}">

      <div class="table-responsive">
        <table class="table table-striped" style="text-align:center" >
          <thead>
            <tr>
              <th with="80px">No</th>
              <th style="text-align:center">Alumno</th>
              <!-- {{ $asig_alumno}} -->
              <th style="text-align:center">Act. Integradora 1</th>
              <th style="text-align:center">Act. Integradora 2</th>
              <th style="text-align:center">Promedio</th>
              <th style="text-align:center">35% Integradora</th>

              <th style="text-align:center">Act. Cotidiana</th>
              <th style="text-align:center">35% Cotidiana</th>

              <th style="text-align:center">Laboratorio</th>
              <th style="text-align:center">Examen</th>
              <th style="text-align:center">Promedio</th>
              <th style="text-align:center">30% Pruebas</th>

              <th style="text-align:center">Promedio Trimestral</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($asig_alumno as $key => $asignacion_alumno)
              <tr>
                <td>
                  {{ $key+1 }}
                </td>
                <td>

                  <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_asignacion_alumno]" value="{{ $asignacion_alumno->id }}">
                  <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_materia]" value="{{ $id }}">
                  <input  required type="hidden" name="notas[asignacion][{{ $key  }}][id_trimestre]" value="{{ $trimestre }}">
 
                  @php ($notasAsignada = $asignacion_alumno->AsignacionNotas->where('id_materia', $id )->where('id_trimestre', $trimestre )->first())
                  {{ $asignacion_alumno->alumno->nombres .' '. $asignacion_alumno->alumno->apellidos  }}
                </td>
                <td>
                  <input  required type="number" min="0" max="10" step="0.01" id="t1" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_1  }}" onchange="Calcular({{ $key }})" class="t1 {{$key}}_t1 form-control required" name="notas[integradora][{{ $key  }}][activi_1]">
                </td>
                <td>
                  <input  required type="number" min="0" max="10" step="0.01" id="t2" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->activi_2  }}" onchange="Calcular({{ $key }})" class="t2 {{$key}}_t2 form-control required" name="notas[integradora][{{ $key  }}][activi_2]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" id="promedio" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->promedio_i }}" onchange="Calcular({{ $key }})" class="prom {{$key}}_prom form-control required" name="notas[integradora][{{ $key  }}][promedio_i]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadIntegradora->first()->prom_i_porcent  }}" onchange="Calcular_Prom({{ $key }})" class="prom_porcent {{$key}}_prom_porcent form-control required" name="notas[integradora][{{ $key  }}][prom_i_porcent]">
                </td>
                <td>
                  <input  required type="number" min="0" max="10" step="0.01" id="t3" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_cotidiana  }}" onchange="Calcular_coti({{ $key }})" class="coti {{$key}}_coti form-control required" name="notas[cotidiana][{{ $key  }}][nota_cotidiana]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->ActividadCotidiana->first()->nota_porcent  }}" onchange="Calcular_Prom({{ $key }})" class="coti_porcent {{$key}}_coti_porcent form-control required" name="notas[cotidiana][{{ $key  }}][nota_porcent]">
                </td>
                <td>
                  <input  required type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : 
                  $notasAsignada->Prueba->first()->laboratorio }}" onchange="Calcular_prueba({{ $key }})" class="labo {{$key}}_labo form-control required" name="notas[pruebas][{{ $key  }}][laboratorio]">
                </td>
                <td>
                  <input  required type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : 
                  $notasAsignada->Prueba->first()->examen }}" onchange="Calcular_prueba({{ $key }})" class="exa {{$key}}_exa form-control required" name="notas[pruebas][{{ $key  }}][examen]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : 
                  $notasAsignada->Prueba->first()->promedio_p }}" onchange="Calcular_prueba({{ $key }})" class="prueba_prom {{$key}}_prueba_prom form-control required" name="notas[pruebas][{{ $key  }}][promedio_p]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->Prueba->first()->prom_p_porcent }}" onchange="Calcular_Prom({{ $key }})" class="prueba_porcent {{$key}}_prueba_porcent form-control required" name="notas[pruebas][{{ $key  }}][prom_p_porcent]">
                </td>
                <td>
                  <input  required readonly="readonly" type="number" min="0" max="10" step="0.01" value="{{ is_null($notasAsignada) ? '0' : $notasAsignada->nota_trimestral }}" class="prom_trimestral {{$key}}_prom_trimestral form-control required" name="notas[asignacion][{{ $key  }}][nota_trimestral]">
                </td>
              </tr>
            @endforeach
          </tbody>

        </table>
      </div>
      <br>
      
  <div class="text-center">
    @if ($asig_alumno !== null)
    <button class="btn btn-success" type="submit" name="button">Guardar Notas</button>
    @endif
    <a class="btn btn-primary" href="{{ route('notas.index') }}"> <i class="glyphicon glyphicon-arrow-left"> Regresar</i></a>
  </div>
      {!! Form::close()!!}
      
  <script>
  $('#notasForm').submit(function(event) {

  });
  $('#notasForm').validate()
 function Calcular(idx) {
 var vr1 = $(`.${idx}_t1`).val();
 var vr2 = $(`.${idx}_t2`).val();
 var p = (parseFloat(vr1)+parseFloat(vr2))/2;
 console.log(p)
 $(`.${idx}_prom`).val( p.toFixed(2));

 var vr3 = $(`.${idx}_prom`).val();
 var p1 = (parseFloat(vr3)*0.35);
 console.log(p1)
 $(`.${idx}_prom_porcent`).val( p1.toFixed(2));
 Calcular_Prom(idx)
 }

 function Calcular_coti(idx) {
 var vr4 = $(`.${idx}_coti`).val();
 var p3 = (parseFloat(vr4)*0.35);
 console.log(p3)
 $(`.${idx}_coti_porcent`).val( p3.toFixed(2));
 Calcular_Prom(idx)
 }

 function Calcular_prueba(idx) {
 var vr1 = $(`.${idx}_exa`).val();
 var vr2 = $(`.${idx}_labo`).val();
 var p4 = (parseFloat(vr1)+parseFloat(vr2))/2;
 console.log(p4)
 $(`.${idx}_prueba_prom`).val( p4 );

 var vr3 = $(`.${idx}_prueba_prom`).val();
 var p1 = (parseFloat(vr3)*0.3);
 console.log(p1)
 $(`.${idx}_prueba_porcent`).val( p1.toFixed(2));
 Calcular_Prom(idx)
 }

 function Calcular_Prom(idx) {
 var vr1 = $(`.${idx}_prom_porcent`).val();
 var vr2 = $(`.${idx}_coti_porcent`).val();
 var vr3 = $(`.${idx}_prueba_porcent`).val();
 var p4 = (parseFloat(vr1)+parseFloat(vr2))+parseFloat(vr3);
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