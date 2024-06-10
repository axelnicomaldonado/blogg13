<x-app-layout>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-100 dark:bg-gray-900 overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Columna 1: Imagen de perfil -->
                        <div class="flex items-center justify-center">
                            <div
                                style="width: 170px; height: 170px; overflow: hidden; border: 2px solid #D1D5DB; border-radius: 50%;">
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
                        <div class="flex items-center justify-start h-16">
                            <div class="text-2xl w-64 break-words">
                                <h4>{{ $user->username }}</h4>
                            </div>
                            <div class="text-2xl mx-16">
                                <h6 class="">{{ $posts->count() }} publicaciones</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="posts">
                @if ($posts->count() > 0)
                <div class="flex items-center justify-center mt-16">
                    <h3 class="text-3xl font-bold text-white">Publicaciones</h3>
                </div>
                @foreach ($posts as $post)
                    <div class="mt-10 py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
                    overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                        <div class="text-3xl font-bold">
                            <h3>{{$post->title}}</h3>
                        </div>
                                <div class="text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800">
                                    <p>{{$user->username}}</p>
                                </div>
                        <div className="botones">
                            <a href="/category/show/{{$post->id}}" class="font-bold inline-flex text-blue-400 
                            px-4 py-2">
                                <p>Ver post</p>
                            </a>
                            @if(Auth::check() && Auth::user()->id == $post->user_id)
                                <a href="/category/edit/{{$post->id}}" class="font-bold inline-flex text-blue-400 
                                px-4 py-2">
                                    <p>Editar post</p>
                                </a>
                            @endif
                        </div>
                        <div class="text-gray-500">
                            <p>{{$post->created_at}}</p>
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="flex items-center justify-center h-64 mt-16">
                        <h3 class="text-3xl font-bold text-white">No hay publicaciones</h3>
                    </div>
            @endif
        </div>
    </div>
    </div>
    </div>
</x-app-layout>
