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
                     >
                    Hay {{ $peliculas['total_results']}} resultados . Página  {{ $peliculas['page']}} de {{ $peliculas['total_pages']}}  </h3>
                            @foreach ($peliculas['results'] as $pelicula)
                                <h4><strong>{{ $pelicula['original_title']}}</strong></h4>
                                {{ var_dump($pelicula) }}
                                <hr> 
                            @endforeach 
                       
                           

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
