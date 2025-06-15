<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Alumnos;
use alumnos1\http\Request\AlumnosRequest;
class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre =$request->get('nombre');
        $alumnos = Alumnos::orderBy('id','DESC')->nombre($nombre)->paginate(20);
        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
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
            'nombres'=>'required|alpha_spaces',
            'apellidos'=>'required|alpha_spaces',
            'no_nie'=>'required|numeric',
            'f_nacimiento'=>'required|date',
            'parvularia'=>'required|alpha_spaces',
            'enfermedad'=>'required|alpha_spaces',
            'nombre_enfermedad'=>'nullable|alpha_spaces',
            'nombre_madre'=>'required|alpha_spaces',
            'dui_madre'=>'nullable|numeric|digits:10',
            'ocupacion_madre'=>'nullable|alpha_spaces',
            'tel_madre'=>'nullable|numeric|digits:8',
            'nombre_padre'=>'required|alpha_spaces',
            'dui_padre'=>'nullable|numeric|digits:10',
            'ocupacion_padre'=>'nullable|alpha_spaces',
            'tel_padre'=>'nullable|numeric|digits:8',
            'vive_con'=>'required|alpha_spaces',
            'carta_compro'=>'nullable|alpha_spaces',
            'rendimiento'=>'nullable|alpha_spaces',
            'nuevo_in'=>'required|alpha_spaces',
            'esc_procedencia'=>'nullable|alpha_spaces',
            'municipio'=>'nullable|alpha_spaces',
        ]);

        $alumnoNie = Alumnos::where('no_nie', $request->no_nie)->exists(); //true or false

        if ($alumnoNie) 
                    {
                      return redirect()->back()->with('error','ERROR!. NIE del Alumno ya esta en el sistema!');    
                    }
        Alumnos::create($request->all());
        return redirect()->route('alumnos.index')->with('success','Alumno guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumnos::find($id);
      return view('alumnos.show',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $alumno = Alumnos::find($id);
        return view('alumnos.edit',compact('alumno'));
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
            'nombres'=>'required|alpha_spaces',
            'apellidos'=>'required|alpha_spaces',
            'no_nie'=>'required|numeric',
            'f_nacimiento'=>'required|date',
            'parvularia'=>'required|alpha_spaces',
            'enfermedad'=>'required|alpha_spaces',
            'nombre_enfermedad'=>'nullable|alpha_spaces',
            'nombre_madre'=>'required|alpha_spaces',
            'dui_madre'=>'nullable|numeric|digits:10',
            'ocupacion_madre'=>'nullable|alpha_spaces',
            'tel_madre'=>'nullable|numeric|digits:8',
            'nombre_padre'=>'required|alpha_spaces',
            'dui_padre'=>'nullable|numeric|digits:10',
            'ocupacion_padre'=>'nullable|alpha_spaces',
            'tel_padre'=>'nullable|numeric|digits:8',
            'vive_con'=>'required|alpha_spaces',
            'carta_compro'=>'nullable|alpha_spaces',
            'rendimiento'=>'nullable|alpha_spaces',
            'nuevo_in'=>'required|alpha_spaces',
            'esc_procedencia'=>'nullable|alpha_spaces',
            'municipio'=>'nullable|alpha_spaces',
        ]);
        Alumnos::find($id)->update($request->all());
        return redirect()->route('alumnos.index')->with('success','Alumno actualizado con exito');
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
            Alumnos::find($id)->delete();
        return redirect()->route('alumnos.index')->with('success','Alumno eliminado con exito');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('alumnos.index')
            ->with('error','¡ERROR! El Alumno esta asignado a un grado, no se puede borrar!!');
        }
    }
}
 
