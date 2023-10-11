<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UsuariosGestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $roles = ['SuperAdmin','admin','usuario'];
    public function index()
    {
        $usuarios = User::get();
        //return $usuarios;
        return view('usuarios.usuarios',['usuarios' => $usuarios, 'roles' => $this->roles]);
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cambiarRol(Request $request)
    {
        //usuario_id: usuarioId,
        //nuevo_rol: rolSeleccionado
        $id=$request->usuario_id;
        $valor = $request->nuevo_rol;
        $user= User::find($id);
        //return (var_dump($peli));

        //return ($peli->estado);
 
        $user->rol = $valor;
 
        $user->save();
        $mensaje = "El usuario : $id ha cambiado el rol a : $valor";
        return response()->json(['message' => $mensaje]);
        //return $mensaje;

    }
}
