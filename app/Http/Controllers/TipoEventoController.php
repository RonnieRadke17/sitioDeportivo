<?php

namespace App\Http\Controllers;
use App\Models\TipoEvento;
use Illuminate\Http\Request;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tipoEventos'] = TipoEvento::all();
        return view('tipoEvento.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipoEvento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        TipoEvento::insert($data);
        // Si la validación es exitosa, redireccionar a una página
        return redirect('tipoEvento')->with('mensaje', 'Registro agregado exitosamente.');
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
        $tipoEvento =TipoEvento::findOrFail($id);
        return view('tipoEvento.edit',compact('tipoEvento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipoEvento = TipoEvento::findOrFail($id);
        $data = $request->except('_token', '_method');
        TipoEvento::where('id', $id)->update($data);
        return redirect('tipoEvento')->with('mensaje', 'Registro modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        TipoEvento::destroy($id);
        return redirect('tipoEvento')->with('mensaje','Registro eliminado.');
    }
}
