<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = usuarios::all();
        return $usuario;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $usuario= new usuarios();
       $usuario->nombre = $request->nombre;
       $usuario->apellido = $request->apellido;
       $usuario->edad = $request->edad;
       $usuario->salario = $request->salario;


       $usuario->save();

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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)

    {
       $usuario= usuarios::findOrFail($request->id);

       $usuario->nombre = $request->nombre;
       $usuario->apellido = $request->apellido;
       $usuario->edad = $request->edad;
       $usuario->salario = $request->salario;


       $usuario->save();

       return $usuario;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request)
    {
        $usuario = usuarios::destroy($request->id);
        return $usuario;
    }
}
