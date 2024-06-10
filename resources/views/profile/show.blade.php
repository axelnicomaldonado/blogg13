<x-app-layout>


    <div class="">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-100 dark:bg-gray-900 overflow-hidden shadow-sm">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-3 gap-6">
                        <!-- Columna 1: Imagen de perfil -->
                        <div class="flex items-center justify-end">
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
                        <div class="flex items-center justify-start h-16 mx-6">
                            <div class="text-2xl w-64 break-words">
                                <h4>{{ $user->username }}</h4>
                            </div>
                            <div class="text-2xl mx-6">
                                <h6 class="">{{ $posts->count() }} publicaciones</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-8">
                @if ($posts->count() > 0)

                    <div class="flex items-center justify-center mt-16">
                        <h3 class="text-3xl font-bold text-white">Publicaciones</h3>
                    </div>
                    @foreach ($posts as $post)
                        <div
                            class="mt-10 pt-8 max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
                    overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 h-80">


                            <div class="flex">
                                <div class="container w-1/2">
                                    <a href="/category/show/{{ $post->id }}">
                                        <img src="{{ asset('storage/imagenes/posts/' . $post->poster) }}"
                                            class="pr-4 max-h-60 hover:scale-105">
                                    </a>
                                    <div class="flex">
                                        <div
                                            class="text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 container py-1">
                                            <a href="/profile/{{ $user->username }}">
                                                <p class="hover:text-blue-500">{{ $user->username }}</p>
                                            </a>
                                        </div>
                                        <div class="justify-end container">
                                            @if (Auth::check() && Auth::user()->id == $post->user_id)
                                                <a href="/category/edit/{{ $post->id }}"
                                                    class="font-bold inline-flex text-blue-400 px-4 py-1">
                                                    <p>Editar post</p>
                                                </a>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="text-gray-500">
                                        <p>{{ $post->created_at }}</p>
                                    </div>


                                </div>

                                <div class="justify-start w-1/2 container">
                                    <div class="text-3xl font-bold mb-2">
                                        <a href="/category/show/{{ $post->id }}" class="hover:text-blue-500">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                    </div>
                                    <div class="text-4 font-bold line-clamp-6">
                                        <p>{!! $post->content !!} </p>
                                    </div>
                                    <a href="/category/show/{{ $post->id }}" class="text-blue-500">ver mas</a>
                                </div>
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
