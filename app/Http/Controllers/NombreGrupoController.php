<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NombreGrupo;
class nombreGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['nombreGrupo'] = NombreGrupo::all();
        return view('nombreGrupo.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nombreGrupo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');
        NombreGrupo::insert($data);
        // Si la validación es exitosa, redireccionar a una página
        return redirect('nombreGrupo')->with('mensaje', 'Registro agregado exitosamente.');
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
    public function edit(string $id)
    {
        //
        $nombreGrupo = NombreGrupo::findOrFail($id);
        return view('nombreGrupo.edit',compact('nombreGrupo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $nombreGrupo = NombreGrupo::findOrFail($id);
        $data = $request->except('_token', '_method');
        NombreGrupo::where('id', $id)->update($data);
     
         return redirect('nombreGrupo')->with('mensaje', 'Registro modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        NombreGRupo::destroy($id);
        return redirect('nombreGrupo')->with('mensaje','Registro eliminado.');
    }
}
