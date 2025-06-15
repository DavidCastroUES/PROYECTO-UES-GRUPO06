<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Docentes;
use App\User;
use docentes1\http\Request\DocentesRequest;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        $nombre =$request->get('nombre');
        $docentes = Docentes::orderBy('id','ASC')->nombre($nombre)->paginate(10);
        return view('docentes.index',compact('docentes','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $users = User::all();
        return view('docentes.create', compact('users'));
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

          'id_usuario' => 'required|numeric',
          'no_escalafon'=>'required|numeric|digits:7',
          'no_dui'=>'required|min:10|max:10',
          'direccion'=>'required',
          'telefono'=>'required|numeric|digits:8',
        ]);
        $docentesUs = Docentes::where('id_usuario', $request->id_usuario)->exists(); //true or false
        $docentesEsc = Docentes::where('no_escalafon', $request->no_escalafon)->exists(); //true or false
        $docentesDui = Docentes::where('no_dui', $request->no_dui)->exists(); //true or false

        if($docentesUs)
            {
              return redirect()->back()->with('error','ERROR!. El Usuario ya esta en el sistema!');
            }
            elseif ($docentesEsc) 
                {
                  return redirect()->back()->with('error','ERROR!. El Escalafon del docente ya esta en el sistema!');
                }
                elseif ($docentesDui) 
                    {
                      return redirect()->back()->with('error','ERROR!. DUI de Docente ya esta en el sistema!');    
                    }        
        Docentes::create($request->all());
        return redirect()->route('docentes.index')->with('success','Docente guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docentes::find($id);
      return view('docentes.show',compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $docente = Docentes::find($id);
        return view('docentes.edit',compact('docente','users'));
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
          'id_usuario'=>'required|numeric',
          'no_escalafon'=>'required|numeric|digits:7',
          'no_dui'=>'required|min:10|max:10',
          'direccion'=>'required',
          'telefono'=>'required|numeric|digits:8',
        ]);

        Docentes::find($id)->update($request->all());
        return redirect()->route('docentes.index')->with('success','Docente actualizado con exito');
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
            Docentes::find($id)->delete();
            return redirect()->route('docentes.index')->with('success','Docente eliminado con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('docentes.index')
            ->with('error','¡ERROR! El Docente esta asignado a un grado, no se puede borrar!!');
        }        
    }
}
 