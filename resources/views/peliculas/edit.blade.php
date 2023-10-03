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
                    <!-- FORMULARIO -->
                    <form class="user" method="POST" action=" {{route('peliculas.update',['id' => $pelicula->id])}} " >
                        @csrf
                        @method("PUT")   
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="hidden" name="id" value="<?php echo $pelicula->id;?>">
                                <p>Titulo</p>
                                <input type="text" class="form-control form-control-user" id="titulo" name="titulo"
                                    placeholder="Titulo" value="<?php echo $pelicula->titulo;?>">
                            </div>
                       <!--      <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name">
                            </div> -->
                        </div>
                        <div class="form-group">
                            <p>Opinión</p>
                            <textarea  class="form-control form-control-user" id="exampleInputEmail" name="opinion" 
                            placeholder="Opinión">
                            <?php echo $pelicula->opinion; ?>
                            </textarea>
                            <p>Overview</p>
                            <textarea  class="form-control form-control-user" id="exampleInputEmail" name="overview" 
                            placeholder="overview">
                            <?php echo $pelicula->overview; ?>
                            </textarea>
                        </div>
                       
                        <input type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Guardar Cambios">
                            
                       
                        
                    </form>
                    <!-- FORMULARIO -->                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
