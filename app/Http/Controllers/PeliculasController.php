<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // lista de las peliculas
        $peliculas = Peliculas::get(); // Accede al Modelo select * from Peliculas
        return view('peliculas.peliculas',['peliculas' => $peliculas]); // envia los datos del modelo a la vista
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
    public function show( $id)
    {
        
        //return $id;
        $pelicula = Peliculas::findOrFail($id);   // Accede al Modelo   y obtiene los datos ...  where id = $id
        return view('peliculas.show', ['pelicula'=>$pelicula]);   

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peliculas $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }

  


}
