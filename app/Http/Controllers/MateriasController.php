<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Materias;
use materias1\http\Request\MateriasRequest;

class MateriasController extends Controller
{
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $materias= Materias::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('materias.index',compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
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
          'nombre'=>'required|alpha_spaces',
        ]);
        $materia = Materias::where('nombre', $request->nombre)
        ->exists(); //true or false
        if($materia)
        {
          return redirect()->route('materias.index')
          ->with('error','¡ERROR! ¡Materia ya está en el sistema, registro duplicado!');
        }
        Materias::create($request->all());
        return redirect()->route('materias.index')->with('success','Materia guardada con éxito');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materias::find($id);
      return view('materias.show',compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $materia = Materias::find($id);
        return view('materias.edit',compact('materia'));
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
          'nombre'=>'required|alpha_spaces',
        ]);
        $materia = Materias::where('nombre', $request->nombre)
        ->exists(); //true or false
        if($materia)
        {
          return redirect()->route('materias.index')
          ->with('error','¡ERROR! ¡Materia ya está en el sistema, registro duplicado!');
        }
        Materias::find($id)->update($request->all());
        return redirect()->route('materias.index')->with('success','Materia actualizada con exito');
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
            Materias::find($id)->delete();
        	return redirect()->route('materias.index')->with('success','Materia eliminada con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('materias.index')
            ->with('error','¡ERROR! ¡La Materia Contiene notas asignadas, no se puede borrar!');
        }
    }
}
