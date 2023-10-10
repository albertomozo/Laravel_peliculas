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
                    @if(session('success'))
                    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        <p>{{ session('success') }}</p>
                      </div>
                    @endif
                    
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tmdb Id</th>
                                <th>Titulo</th>
                                <th>Cartel</th>
                                <th>Estreno</th>
                                <th>Generos</th>
                                <th>Activar</th>
                                <th>Mostrar</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tmdb Id</th>
                                <th>Titulo</th>
                                <th>Cartel</th>
                                <th>Estreno</th>
                                <th>Generos</th>
                                <th>Activar</th>
                                <th>Mostrar</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($peliculas as $pelicula)
                            <tr id="pel_{{ $pelicula->id }}">
                                <td>{{ $pelicula->id }}</td>
                                <td>{{ $pelicula->tmdb_id }}</td>
                                <td>{{ $pelicula->titulo }}</td>
                                <td>
                                    <img src="https://image.tmdb.org/t/p/w154/{{ $pelicula->poster }}" width="50px" />
                                </td>
                                <td>{{ $pelicula->estreno }}</td>
                                <td>
                                {{--     @foreach($pelicula->generos as $genero)
                                    {{ $genero->genero }} 
                                    @endforeach --}}
                                </td>
                                <td>
                                   {{--  @if ($pelicula->estado == 'A')  
                                      <a href="{{ route('peliculas.cambiarCampo', ['id' => $pelicula->id,'campo'=>'estado' ,'valor' => 'D'])  }}" >                                  
                                            <label class="relative inline-flex items-center mb-5 cursor-pointer">
                                                <input type="checkbox" value="D" class="sr-only peer" name="field">
                                                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                                <span class="ml-3 text-sm font-medium text-gray-400 dark:text-gray-500">Desactivar</span>
                                            </label>
                                        </a>
                                    @else
                                    <form method="post" action="{{ route('peliculas.cambiar')}}" method="post" onClick="submit()"> 
                                        @csrf
                                
                                                <input type="checkbox" name="field" value="A" class="sr-only peer" checked >
                                               
                                        </form>
                                     
                                     @endif --}}
  
                                    @if ($pelicula->estado == 'A')
                                     <a href="{{ route('peliculas.cambiarCampo', ['id' => $pelicula->id,'campo'=> 'estado','valor' => 'D']) }}">desactivar</a> 
                                    @else
                                    <a href="{{ route('peliculas.cambiarCampo', ['id' => $pelicula->id,'campo'=> 'estado', 'valor' => 'A']) }}">activar</a> 
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('peliculas.show', ['id' => $pelicula->id]) }}">Mostrar</a>
                                </td>
                                <td>
                                    <a href="{{ route('peliculas.edit', ['id' => $pelicula->id,'titulo'=> $pelicula->titulo, 'valor' => 'A']) }}">Editar</a>
                                </td>
                                <td>
{{--                                     <a href="{{ route('peliculas.confirm',['id' => $pelicula->id,'titulo'=>$pelicula->titulo])}}">borrar</a> --}}
<a href="{{ route('peliculas.confirm',['id' => $pelicula->id,'titulo' => 'titulo'])}}">borrar</a> 
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                        <script>
                            function pel_borrar(vid, vtitulo) {
                                if (confirm('¿Estas seguro de borrar la pelicula "' + vtitulo + '" ( ' + vid + ' )?')) {
                                    urlborrado = "route('peliculas.borrar',['id'=>" + vid + " ])";
                                    location.href = urlborrado;
                                }
                            }
                        </script> 
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
