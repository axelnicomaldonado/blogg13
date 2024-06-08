

<x-app-layout>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-900 overflow-hidden shadow-sm  ">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <p>aca va la imagen</p>

                        <div class="flex flex-col items-center justify-center p-8 gap-2">
                            <img src="{{ asset('storage/imagenes/perfil/' . $user->username . '/' . $user->image) }}" alt="Imagen de perfil" class="w-20 h-20 object-cover rounded-full">
                    </div>
                    

                    {{ $user->username }}'s Profile

                    <p> Este es el mail bobo:  {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
