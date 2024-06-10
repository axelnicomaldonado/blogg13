<x-app-layout>
    @if($posts ==! null)
    <x-slot name="header">
        <div class="flex items-center justify-center relative">
            <div>
                <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __($category->title) }}
                </h2>
            </div>
        </div>
    </x-slot>
    <div class="pb-8">
        @foreach ($posts as $post)
            <div
                class="mt-10 pt-8 max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white dark:bg-gray-800 
            overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100 h-80">


                <div class="flex">
                    <div class="container w-xl h-4xl">
                        <a href="/category/show/{{ $post->id }}">
                            <img src="{{ asset('storage/imagenes/posts/' . $post->poster) }}"
                                class="pr-4 bg-cover hover:scale-105">
                        </a>
                        @foreach ($users as $user)
                            @if ($user->id == $post->user_id)
                            <div class="flex">
                                <div class="text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 container py-1">
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
                            @endif
                        @endforeach

                            <div class="text-gray-500">
                                <p>{{ $post->created_at }}</p>
                            </div>


                    </div>

                    <div class="justify-start max-w-xl container">
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
    </div>
    @endif
</x-app-layout>