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
                                    @if ($pelicula->estado == 'A')
                                    {{-- <a href="{{ route('peliculas.toggleEstado', ['id' => $pelicula->id, 'estado' => 'D']) }}">desactivar</a> --}}
                                    @else
                                    {{-- <a href="{{ route('peliculas.toggleEstado', ['id' => $pelicula->id, 'estado' => 'A']) }}">activar</a> --}}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('peliculas.show', ['id' => $pelicula->id]) }}">Mostrar</a>
                                </td>
                                <td>
                                 {{--    <a href="#" onclick="pel_borrar('{{ $pelicula->id }}','{{ $pelicula->titulo }}')">borrar</a> --}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
{{--                         <script>
                            function pel_borrar(vid, vtitulo) {
                                if (confirm('¿Estas seguro de borrar la pelicula "' + vtitulo + '" ( ' + vid + ' )?')) {
                                    location.href = "{{ route('peliculas.borrar') }}?id=" + vid;
                                }
                            }
                        </script> --}}
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
