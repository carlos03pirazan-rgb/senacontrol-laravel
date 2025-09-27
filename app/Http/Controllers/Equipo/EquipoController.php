<?php

namespace App\Http\Controllers\Equipo;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('equipo.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MARCA' => 'required|string',
            'REFERENCIA' => 'required|string',
            'COLOR' => 'required|string',
            'TIPO_REFERENCIA' => 'required|string',
            'NUM_REFERENCIA' => 'required|string',
            'NOMBRE_PROPIETARIO' => 'required|string',
        ]);

        $equipo = Equipo::create([
            'MARCA' => $request->MARCA,
            'REFERENCIA' => $request->REFERENCIA,
            'COLOR' => $request->COLOR,
            'TIPO_REFERENCIA' => $request->TIPO_REFERENCIA,
            'NUM_REFERENCIA' => $request->NUM_REFERENCIA,
            'NOMBRE_PROPIETARIO' => $request->NOMBRE_PROPIETARIO,
        ]);

        return redirect()->route('equipo.index')->with('success', 'Equipo registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
