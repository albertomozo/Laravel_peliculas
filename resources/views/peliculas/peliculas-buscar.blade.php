<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Films') }}
        </h2>
    </x-slot>
    @include('components.peliculas-buscar-form')
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                   {{--  {{ var_dump($peliculas)}} --}}
                     <h3 
                        class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"
                     >Busqueda :   {{ $search}}  <h3>
                     <table>
                    Hay {{ $peliculas['total_results']}} resultados . Página  {{ $peliculas['page']}} de {{ $peliculas['total_pages']}}  </h3>
                            @foreach ($peliculas['results'] as $pelicula)
                               {{--  {{ var_dump($pelicula)}} --}}
                                <tr id="pel_{{ $pelicula['id'] }}">
                                    <td>{{ $pelicula['id'] }}</td>
                                    <td>{{  $pelicula['original_title'] }}</td>
                                    
                                    <td>
                                        <img src="https://image.tmdb.org/t/p/w154{{ $pelicula['poster_path'] }}" width="50px" /> 
                                    </td>
                                    <td>{{ $pelicula['release_date']}}</td>
                                    <td>
                                        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ route('peliculas.peliculas-tmdb',['id'=>$pelicula['id']]) }}">
                                        <i class="fas fa-ban"></i> Grabar
                                        </a>
                                    </td>

                                
                                
                            @endforeach 
                       
                            </table>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
