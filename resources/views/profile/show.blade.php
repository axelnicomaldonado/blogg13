<x-app-layout>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-100 dark:bg-gray-900 overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Columna 1: Imagen de perfil -->
                        <div class="flex items-center justify-center">
                            <div
                                style="width: 160px; height: 160px; overflow: hidden; border: 2px solid #D1D5DB; border-radius: 50%;">
                                @if ($user->image)
                                    <img src="{{ asset('storage/imagenes/perfil/' . $user->username . '/' . $user->image) }}"
                                        alt="Imagen de perfil" class="object-cover w-full h-full">
                                @else
                                    <img src="{{ asset('storage/imagenes/perfil/no-perfil.webp') }}"
                                        alt="Imagen de perfil" class="object-cover w-full h-full">
                                @endif
                            </div>
                        </div>
                        <!-- Columna 2: Username -->
                        <div class="flex items-start justify-start">
                            <div style="font-size: 1.5em;">
                                <h4>{{ $user->username }}</h4>
                            </div>
                        </div>
                        <!-- Columna 3: Vacía -->
                        <div class="flex items-center justify-center">
                            <p> vacio </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
