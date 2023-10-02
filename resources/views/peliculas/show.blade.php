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
                              {{ $pelicula->titulo}}
                            </h3>

                            <p class="mt-1 text-xs font-medium text-gray-600">{{ $pelicula->estreno}}</p>
                            </div>

                            <div class="hidden sm:block sm:shrink-0">
                            <img
                                alt="{{ $pelicula->titulo}}"
                                src="https://image.tmdb.org/t/p/w154/{{ $pelicula->poster }}" width="100px" 
                                class="h-16 w-16 rounded-lg object-cover shadow-sm"
                            />
                            </div>
                        </div>

                        <div class="mt-4">
                            <p class="max-w-[40ch] text-sm text-gray-500">
                             {{ substr($pelicula->overview,0,150) }}
                            </p>
                        </div>

                        <dl class="mt-6 flex gap-4 sm:gap-6">
                            <div class="flex flex-col-reverse">
                            <dt class="text-sm font-medium text-gray-600">Lista generos</dt>
                            <dd class="text-xs text-gray-500">Generos</dd>
                            </div>

                            <div class="flex flex-col-reverse">
                            <dt class="text-sm font-medium text-gray-600">Votaciones</dt>
                            <dd class="text-xs text-gray-500">💥</dd>
                            </div>
                        </dl>
                        </a>

                    <!-- card -->                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
