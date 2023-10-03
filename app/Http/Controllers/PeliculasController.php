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
    public function edit($id)
    {
        //
        $pelicula = Peliculas::findOrFail($id);   // Accede al Modelo   y obtiene los datos ...  where id = $id
        return view('peliculas.edit', ['pelicula'=>$pelicula]); 
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'titulo' => 'required|max:255',
            'overview' => 'required',
          ]);
          $post = Peliculas::find($id);
          $post->update($request->all());
          return redirect()->route('peliculas')
            ->with('success', 'Modificación correcta.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        return $id;
    }

    public function confirm( $id,string  $titulo)
    {
        //

        return view('peliculas.confirmar',['id'=>$id,'titulo'=>$titulo]);
    }

    public function cambiar(string $id,string $campo, string $valor)
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



  


}
