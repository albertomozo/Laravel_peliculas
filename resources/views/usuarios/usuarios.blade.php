<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
 {{--    @include('components.peliculas-buscar-form') --}}
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
                                <th>Name</th>
                                <th>Rol</th>
                                
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Rol</th>
                                
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr id="usuario_{{ $usuario->id }}">
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>
                                    <select id="rol-{{$usuario->id}}" name="rol" onchange="cambiarRol(this.value, {{ $usuario->id }})">>
                                        @foreach($roles as $rol)
                                            <option value="{{ $rol }}" {{ $usuario->rol == $rol ? 'selected' : '' }}>
                                                {{ $rol }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                    
                                    {{ $usuario->rol }}</td>                   
                                    
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <script>
                           
                             function cambiarRol(rolSeleccionado, usuarioId) {
                                    // Realiza una solicitud fetch o ejecuta la lógica que desees aquí
                                    // Puedes usar rolSeleccionado y usuarioId para realizar operaciones en el servidor
                                    
                                    // Por ejemplo, puedes enviar una solicitud POST al servidor para actualizar el rol del usuario
                                    fetch('/actualizar-rol', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Asegúrate de incluir el token CSRF si estás utilizando Laravel
                                        },
                                        body: JSON.stringify({
                                            usuario_id: usuarioId,
                                            nuevo_rol: rolSeleccionado
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        // Maneja la respuesta del servidor
                                        if (data.message) {
                                            // Muestra el mensaje de confirmación
                                            alert(data.message); // Puedes personalizar esto con una ventana modal o una notificación
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                    });
                                }
                                                   
                            </script>
                        
                        
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
