<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaBuscarController extends Controller
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
        $tmdb_apikey = env('TMDB_APIKEY');
        $search = $request->search;
        $pagina = 1;
        $url = "https://api.themoviedb.org/3/search/movie?api_key=$tmdb_apikey&language=es&query=$search&page=1&include_adult=false&page=$pagina";
        $resultado = file_get_contents($url);
        
        //return $resultado;
        $items = json_decode($resultado, true);
        //return $items;
      
        return view('peliculas.peliculas-buscar',['peliculas'=>$items]);


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
}
