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
