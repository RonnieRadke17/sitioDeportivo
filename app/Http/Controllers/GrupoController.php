<?php

namespace App\Http\Controllers;
use App\Models\Grupo;
use App\Models\NombreGrupo;
use App\Models\Periodo;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()//lleva 3 relaciones con extracurricular con nombre grupo y periodo
    {
        $data['grupos'] = Grupo::all();
        return view('grupo.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()//revisar que el diseno esta raro
    {
        //sencillo manda los ddList como si fueras a mostrar todos los valores
        $grupo = new Grupo(); // Crear un nuevo objeto Grupo
        $nombreGrupo = NombreGrupo::pluck('nombre','id');
        $nombreExtracurricular = Extracurricular::pluck('nombre','id');
        $periodos = Periodo::all(); // Obtener todos los periodos

        $periodoOptions = []; // Array para almacenar las opciones del select

        foreach ($periodos as $periodo) {//aqui mandamos los valores concatenados para mostrarlos en la vista
            $inicioFin = $periodo->inicio . ' - ' . $periodo->fin; // Combinar los valores de inicio y fin
            $periodoOptions[$periodo->id] = $inicioFin; // Asignar la combinación a la clave del id
        }
        return view('grupo.create',compact('grupo','nombreGrupo','nombreExtracurricular','periodoOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        Grupo::insert($data);
        return redirect('grupo')->with('mensaje', 'Registro agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)// ya me lo muestra pero falla en el create
    {
        $grupo =Grupo::findOrFail($id);
        $nombreGrupo = NombreGrupo::pluck('nombre','id');
        $nombreExtracurricular = Extracurricular::pluck('nombre','id');
        $periodos = Periodo::all(); // Obtener todos los periodos

        $periodoOptions = []; // Array para almacenar las opciones del select

        foreach ($periodos as $periodo) {
            $inicioFin = $periodo->inicio . ' - ' . $periodo->fin; // Combinar los valores de inicio y fin
            $periodoOptions[$periodo->id] = $inicioFin; // Asignar la combinación a la clave del id
        }

        return view('grupo.edit',compact('grupo','nombreGrupo','nombreExtracurricular','periodoOptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)//falta agregar el status
    {
        $data = $request->except('_token', '_method');
        Grupo::where('id', $id)->update($data);
        return redirect('grupo')->with('mensaje', 'Registro modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)//ya
    {
        //
        Grupo::destroy($id);
        return redirect('grupo')->with('mensaje','Registro eliminado.');
    }
}
