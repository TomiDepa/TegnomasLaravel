<?php

namespace App\Http\Controllers;

use App\Models\rol;
use App\Http\Requests\StorerolRequest;
use App\Http\Requests\UpdaterolRequest;
use App\Models\Permiso;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rols = Rol::all();
        $permisos = Permiso::all();
        return view('Rols.index', compact('rols','permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permisos = Permiso::all();
        return view('Rols.create',compact('permisos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorerolRequest $request)
    {
        Rol::create($request->all());
        return redirect(route('rols.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(rol $rol)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rol $rol)
    {
        $permisos = Permiso::all();
        return view('Rols.edit', compact('rol','permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdaterolRequest $request, rol $rol)
    {
        $rol->update($request->all());
        return redirect()->route('rols.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rol $rol)
    {
        $rol->delete();
        return redirect()->route('rols.index');
    }
}
