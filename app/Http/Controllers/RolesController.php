<?php

namespace App\Http\Controllers;
use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['roles'] = Roles::all();
        return view('rol.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('_token');
        Roles::insert($data);
        // Si la validación es exitosa, redireccionar a una página
        return redirect('rol')->with('mensaje', 'Registro agregado exitosamente.');
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
        $rol =Roles::findOrFail($id);
        return view('rol.edit',compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rol = Roles::findOrFail($id);
        $data = $request->except('_token', '_method');
        Roles::where('id', $id)->update($data);
        return redirect('rol')->with('mensaje', 'Registro modificado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Roles::destroy($id);
        return redirect('rol')->with('mensaje','Registro eliminado.');
    }
}
