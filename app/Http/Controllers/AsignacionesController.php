<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Asignaciones;
use App\Docentes;
use App\Grados;
use asignaciones1\http\Request\AsignacionesRequest;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Y= date("Y");
        $docentes = Docentes::all();
        $grados = Grados::all();
        $nombre =$request->get('nombre');
        $asignacion = Asignaciones::where('anio', $Y)->orderBy('id','DES')->nombre($nombre)->paginate(10);
        $asignaciones = Asignaciones::orderBy('anio','desc')->nombre($nombre)->paginate(10);
        return view('asignaciones.index',compact('asignaciones','docentes','grados','asignacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docentes::all();
        $grados = Grados::all();
        return view('asignaciones.create', compact('docentes','grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request,[
          'id_docente'=>'required|numeric',  
          'id_grado'=>'required|numeric',
          'anio'=>'required|numeric',
        ]);

        $asignacion = Asignaciones::where('id_docente', $request->id_docente)
        ->where('anio', $request->anio)
        ->exists(); //true or false
        if($asignacion)
        {
          return redirect()->route('asignaciones.index')
          ->with('error','ERROR!. El docente ya ha sido asignado en un grado en este año!');
        }
        $asignacion2 = Asignaciones::where('id_grado', $request->id_grado)
        ->where('anio', $request->anio)
        ->exists(); //true or false
        if($asignacion2){
            return redirect()->route('asignaciones.index')
            ->with('error','ERROR!. El Grado ya ha sido asignado a otro docente!');
        }
            Asignaciones::create($request->all());
            return redirect()->route('asignaciones.index')->with('success','Asignacion guardada con éxito');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignacion = Asignaciones::find($id);
      return view('asignaciones.show',compact('asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentes = Docentes::all();
        $grados = Grados::all();
        $asignacion = Asignaciones::find($id);
        return view('asignaciones.edit',compact('asignacion','docentes','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'id_docente'=>'required|numeric',  
          'id_grado'=>'required|numeric',
          'anio'=>'required|numeric',
        ]);

        $asignacion = Asignaciones::where('id_grado', $request->id_grado)
        ->where('anio', $request->anio)
        ->exists(); //true or false
        if($asignacion)
        {
          return redirect()->route('asignaciones.index')
          ->with('error','ERROR!. La asignacion no pudo actualizarse, el Grado ya tiene asignado un docente!');
        }
        Asignaciones::find($id)->update($request->all());
        return redirect()->route('asignaciones.index')->with('success','Asignacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        try {
            Asignaciones::find($id)->delete();
        return redirect()->route('asignaciones.index')->with('success','Asignacion eliminada con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('asignaciones.index')->with('error','¡ERROR! Al grado de esta asignacion se le agregaron alumnos, no se puede borrar!! Intente borar la asignacion Alumnos Grado e intentelo de nuevo.');
        }  
        
    }
}

