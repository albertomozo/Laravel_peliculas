<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Films') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- card -->
                    <a
                        href="#"
                        class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8"
                        >
                        <span
                            class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
                        ></span>

                        <div class="sm:flex sm:justify-between sm:gap-4">
                            <div>
                            <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                              Datos API : {{  $pelicula['original_title'] }}
                            </h3>

                            <p class="mt-1 text-xs font-medium text-gray-600">{{ $pelicula['release_date']}}</p>
                            </div>

                            <div class="hidden sm:block sm:shrink-0">
                            <img
                                alt="{{-- $pelicula->titulo--}}"
                                src="https://image.tmdb.org/t/p/w154{{ $pelicula['poster_path'] }}" width="100px" 
                                class="h-16 w-16 rounded-lg object-cover shadow-sm"
                            />
                            </div>
                        </div>

                        <div class="mt-4">
                            <p class="max-w-[40ch] text-sm text-gray-500">
                             {{-- substr($pelicula->overview,0,150) --}}
                            </p>
                        </div>

                       {{--  <dl class="mt-6 flex gap-4 sm:gap-6">
                            <div class="flex flex-col-reverse">
                            <dt class="text-sm font-medium text-gray-600">Lista generos</dt>
                            <dd class="text-xs text-gray-500">Generos</dd>
                            </div>

                            <div class="flex flex-col-reverse">
                            <dt class="text-sm font-medium text-gray-600">Votaciones</dt>
                            <dd class="text-xs text-gray-500">💥</dd>
                            </div>
                        </dl> --}}
                        </a>
                        <ul class="class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white"">
                            <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600"><a href="https://api.themoviedb.org/3/movie/{{ $pelicula['id'] }}/videos?api_key={{env('TMDB_APIKEY')}}&language=es" target="_blank" class="link" >Videos</a></li>
                            <li  class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600"><a href="https://api.themoviedb.org/3/movie/{{ $pelicula['id'] }}/credits?api_key={{env('TMDB_APIKEY')}}&language=es" target="_blank" class="link" >Creditos</a></li>
                        </ul>
                            <!-- fin card --> 
                    <!-- formulario insercion peliculas -->
                    <form class="user" method="POST" action=" {{route('peliculas.create',['id' => $pelicula['id']]) }} " >
                        @csrf
                        @method("POST")   
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="hidden" name="tmdb_id" value="{{ $pelicula['id'] }}">
                              
                                <input type="hidden"  name="titulo" value="{{ $pelicula['original_title'] }}">
                                    <input type="hidden"  name="poster"    value="{{$pelicula['poster_path']}}">
                                    <input type="hidden" name="estado" value="D">
                                    <input type="hidden" name="estreno" value="{{$pelicula['release_date']}}">
                                    <input type="hidden" name="created_at" value="{{ date("Y/m/d H:i:s") }}"> 
                                    <input type="hidden" name="modified_at" value="{{ date("Y/m/d H:i:s") }}">    
                            </div>
                   
                        </div>
                        <div class="form-group">
                            <p>Opinión</p>
                            <textarea  class="form-control form-control-user" id="exampleInputEmail" name="opinion" 
                            placeholder="Opinión">
                          
                            </textarea>
                            <p>Overview</p>
                            <textarea  class="form-control form-control-user" id="exampleInputEmail" name="overview" 
                            placeholder="overview">
                            {{ $pelicula['overview'] }}
                            </textarea>
                        </div>
                       
                        <input type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Añadir Pelicula">
                            
                       
                        
                    </form>
                    <!-- fin formulario insercion peliculas -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
