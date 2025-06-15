<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Grados;
use App\Docentes;
use grados1\http\Request\GradosRequest;

class GradosController extends Controller
{
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $grados = Grados::orderBy('id','DESC')->nombre($nombre)->paginate(10);
        return view('grados.index',compact('grados'));
    }

    public function create()
    {
        return view('grados.create');
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
          'seccion'=>'required|alpha_spaces',
          'capacidad'=>'required|numeric',
        ]);
        $grado = Grados::where('nombre', $request->nombre)
        ->where('seccion', $request->seccion)
        ->exists(); //true or false
        if($grado)
        {
          return redirect()->back()
          ->with('error','¡ERROR!. El grado ya se encuentra en el sistema, ¡Registro repetido!');
        }
        Grados::create($request->all());
        return redirect()->route('grados.index')->with('success','Grado guardado con éxito');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Grados::find($id);
      return view('grados.show',compact('grado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $grado = Grados::find($id);
        return view('grados.edit',compact('grado'));
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
          'seccion'=>'required|alpha_spaces',
          'capacidad'=>'required|numeric',
        ]);
        $grado = Grados::where('nombre', $request->nombre)
        ->where('seccion', $request->seccion)
        ->exists(); //true or false
        if($grado)
        {
          return redirect()->route('grados.index')
          ->with('error','¡ERROR! No se pudo actualizar, el Grado ya se encuentra en el sistema, ¡Registro repetido!');
        }
        Grados::find($id)->update($request->all());
        return redirect()->route('grados.index')->with('success','Grado actualizado con exito');
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
        Grados::find($id)->delete();
        return redirect()->route('grados.index')->with('success','Grado eliminado con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('grados.index')->with('error','¡ERROR! El grado ha sido asignado a un Docente, no se puede borrar!! Borre la asignacion Docente Grado e intentelo de nuevo.');
        }
        
    }
}
