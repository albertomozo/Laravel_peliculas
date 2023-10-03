<?php

namespace App\Http\Controllers;
use App\Models\Peliculas;


use Illuminate\Http\Request;

class PelisCambiarCampo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       /*  $request->campo;
        $request->valor; */
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,string $campo, string $valor)
    {
        //
        //$cadena = "$id , $campo, $valor";
    
        $peli= Peliculas::find($id);
        //return (var_dump($peli));

        //return ($peli->estado);
 
        $peli->estado = $valor;
 
        $peli->save();
        return   redirect('/peliculas');
      
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
}
